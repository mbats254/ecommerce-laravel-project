# Laravel API Implementation Plan (`anchor-api`)

## Context

`docs/api-design.md` and `docs/database-schema.md` already define **what** the API is — every endpoint, every table. This document is the **how**: the application architecture, build sequence, and engineering discipline needed to make that API strong, stable, and scalable, without duplicating what those two documents already specify.

The frontend (this repo) is fully built against mock data, with a complete, locked TypeScript contract (`src/types/*.ts`), Zod schemas (`src/schemas/*.ts`), a documented data-loading strategy (`docs/admin-data-loading-plan.md`), and even literal fixture data (`src/lib/mock-data.ts`, `mock-admin-data.ts`) that doubles as a spec for what a "correct" API response looks like. That's an unusually strong starting position — the backend isn't being designed from scratch, it's being built **to a contract that already exists**. This plan treats that contract as authoritative and is organized to preserve it exactly, catching drift before it happens rather than after.

Build order follows the user's actual journey — **login → listings → buying → order processing** — with supporting admin modules layered on once that core revenue path works end-to-end.

## 0. Schema reconciliation — gaps found against the frontend contract

Cross-checking `database-schema.md` against the frontend's actual TS types (`src/types/admin.ts`, `src/schemas/*.ts`) surfaced real mismatches. Resolve these **before** writing migrations — they're cheap to fix now, expensive to fix after the frontend swaps from mock data to live calls.

| Area | Frontend expects | Schema currently has | Fix |
|---|---|---|---|
| `quotations.status` | `draft \| sent \| accepted \| rejected \| expired` | `draft, sent, accepted, declined, expired` | Rename `declined` → `rejected` in the enum |
| `banners.position` | `homepage_hero \| homepage_top \| category_top` | `hero, promo_strip, category_top` | Rename first two values to match |
| `users` (admin) | needs a `status: active \| invited \| suspended` and `last_active_at` for the Users module | no `status` column, only `last_login_at` | Add `status` enum (default `active`) and reuse `last_login_at` as `lastActiveAt` (no new column needed) |
| `warehouses` | needs `manager` (string) | not present | Add `manager` string column |
| AI Insights | needs an `ai_insights` table (`title`, `description`, `impact` enum, `metric_label`, `metric_value`) | not in schema at all | New table — see §3.6 |
| `products.status` | `active \| draft \| archived` | `enum(draft, active, archived) default draft` | Values match — no change, just note the order |

Everything else (order statuses, stock statuses, payment methods, return statuses, support ticket statuses, coupon types) matches exactly. Treat this table as a living checklist — re-run it whenever a frontend type changes.

## 1. Foundation

**Stack**: Laravel 12, PHP 8.3+, MySQL 8, Redis (cache/session/queue), Meilisearch — all already decided in `api-design.md`/`database-schema.md`.

**Composer packages** (each chosen to remove a category of hand-written, error-prone code, not for its own sake):

| Package | Replaces hand-written... | Notes |
|---|---|---|
| `laravel/sanctum` | Custom SPA cookie/token auth | Already assumed by `api-client.ts`'s `credentials: "include"` |
| `spatie/laravel-permission` | Role/permission tables + gate checks | Already assumed by `database-schema.md` |
| `laravel/scout` + Meilisearch | Product search/filter SQL | Already assumed by `database-schema.md` |
| `spatie/laravel-query-builder` | Per-endpoint filter/sort/include parsing | Maps directly onto `api-design.md`'s flat-query-param convention (`?categorySlug=&brandSlugs[]=&sort=`) — biggest single reusability win in this plan, see §2 |
| `laravel/horizon` | Queue visibility/metrics | Already assumed by `api-design.md`'s "Queued jobs" section |
| `laravel/telescope` | Local/staging debugging | **Never** enabled in production |
| `larastan/larastan` + `laravel/pint` | Manual code review for type/style issues | CI gate, mirrors the frontend's `tsc`/`eslint` discipline |
| `pestphp/pest` | PHPUnit boilerplate | Feature-test-per-endpoint convention, see §5 |

Deliberately **not** using: a repository-pattern abstraction layer (Eloquent + query scopes are enough for a single-database app and stay easier to test/read), `spatie/laravel-medialibrary` (the schema already models `product_images`/`banners.image_path` directly — a media library would be a second, redundant abstraction), a payment-gateway package (Daraja's API surface is two calls — STK push + callback — a thin custom client gives full control and no dependency risk on a third-party wrapper's release cadence).

## 2. Application architecture — where reusability and efficiency actually come from

A fixed layering, applied identically to every domain, so a developer who's built one module already knows how every other module is shaped:

```
Route → Controller (thin) → Form Request (validate + authorize)
      → Action (business logic, single handle()/__invoke())
      → Eloquent model + query scopes
      → API Resource (response shape)
                ↳ Events (side effects, queued listeners)
                ↳ Jobs (anything not required synchronously)
```

**Controllers stay thin.** One responsibility: pull the validated Form Request, call one Action, return one Resource. No business logic in controllers — that's what makes Actions reusable from console commands and queued jobs too, not just HTTP.

**Actions are the reusable unit.** Every meaningful business operation is a single-purpose, invokable class under `App\Actions\<Domain>\...` — `PlaceOrderAction`, `TransitionOrderStatusAction`, `ValidateCouponAction`, `AdjustStockAction`. Each is unit-testable with no HTTP layer involved, and each is called from exactly the places that need it (e.g. `ValidateCouponAction` is called by both the storefront's `/coupons/validate` preview endpoint and internally by `PlaceOrderAction` at checkout — one implementation, two call sites, impossible for them to disagree).

**Native PHP enums, one per frontend union type**, string-backed with the exact same values as the TS type:

```php
enum OrderStatus: string {
    case Pending = 'pending'; case Processing = 'processing'; case Packing = 'packing';
    case Shipped = 'shipped'; case Delivered = 'delivered';
    case Cancelled = 'cancelled'; case Refunded = 'refunded';
}
```

Used in migrations (`->enum('status', OrderStatus::values())`), Form Request validation (`Rule::enum(OrderStatus::class)`), and Eloquent casts (`'status' => OrderStatus::class`) — an API Resource never has to translate anything, it just serializes the enum's value, which is already the exact string the frontend's `OrderStatusBadge` etc. expect. One enum class per: `OrderStatus`, `StockStatus`, `ProductStatus`, `PaymentMethod`, `ReturnStatus`, `SupportTicketStatus`, `CouponType`, `BannerPosition`, `QuotationStatus`, `AdminUserStatus`.

**Form Requests mirror Zod schemas 1:1** — same validation rules expressed in each layer's own language, so there is exactly one place per platform to look:

| Frontend schema | Backend Form Request |
|---|---|
| `schemas/checkout.ts` (`checkoutSchema`) | `CheckoutRequest` |
| `schemas/product.ts` (`productSchema`) | `StoreProductRequest` / `UpdateProductRequest` |
| `schemas/coupon.ts` | `StoreCouponRequest` |
| `schemas/category.ts`, `brand.ts`, `warehouse.ts`, `banner.ts`, `admin-user.ts`, `settings.ts` | one Form Request each, same field names |

**API Resources mirror TS types 1:1** — the contract test in §5 asserts this mechanically, but the authoring convention is: one Resource class per `src/types/*.ts` interface, field names identical, nested objects (`brand: {id,name,slug}`, `category: {id,name,slug}`) built via nested Resources, not flattened.

**Query filtering via `spatie/laravel-query-builder`** on every list endpoint — `allowedFilters(['categoryId', 'brandId', 'status', AllowedFilter::scope('priceMin'), ...])`, `allowedSorts(['price', 'created_at', 'popularity'])`. This one package eliminates almost all custom `if ($request->has(...))` filter-building code across every list endpoint (products, orders, customers, quotations...) and makes every list endpoint behave identically by construction — a new filter on a new domain is a one-line addition, not new logic.

**Events decouple side effects from the main transaction.** `OrderPlaced`, `OrderStatusChanged`, `PaymentSucceeded`, `StockLevelLow`, `ReviewSubmitted` — each Action fires an event; listeners (queued by default) handle email/SMS/cache-invalidation/audit-logging. The Action itself never knows or cares who's listening — new side effects (e.g. "also post to Slack when stock is low") are new listeners, zero changes to the Action.

**One `Auditable` trait, applied to every admin-editable model**, replaces per-model audit-logging boilerplate: a model observer writes to the existing `audit_logs` table (`action`, `subject_type`, `subject_id`, `changes`) automatically on create/update/delete. Adding audit logging to a new model is `use Auditable;` — nothing else.

## 3. Systematic build, in user-journey order

### 3.1 Identity & access (build first — everything else needs it)

- Tables: `users`, `roles`/`permissions`/pivot tables (spatie), `personal_access_tokens` (Sanctum), `addresses` — per `database-schema.md`, plus the `status` column noted in §0.
- Endpoints: `/auth/register|login|logout|me|password/forgot|password/reset`, `/account/addresses/*` (`api-design.md`).
- Sanctum **SPA cookie** flow (matches `credentials:"include"` already in `api-client.ts`). **Frontend follow-up**: `api-client.ts` will need to `GET /sanctum/csrf-cookie` once before the first mutating request — flag this when auth work starts on the frontend side.
- `throttle:auth` rate limiter on register/login/password endpoints from day one, not retrofitted later.
- Registration → queued `SendEmailVerification` job. Login updates `last_login_at` (doubles as the admin Users module's `lastActiveAt`, see §0).
- **Roles/permissions seeder is literally transcribed from the frontend's own fixtures** — `MOCK_ROLES` (Administrator, Catalog Manager, Sales & Support, Marketing) and the `PermissionKey` union (`products.manage`, `orders.manage`, `customers.manage`, `marketing.manage`, `reports.view`, `settings.manage`, `users.manage`) become the exact spatie permissions and role-permission assignments. Zero ambiguity about what a role can do — it was already decided when the admin UI was designed.
- `/admin/users`, `/admin/roles` built on top of this.

**Exit criterion**: a user can register, verify email, log in, and an admin can create a second admin user with a restricted role that a Pest test proves cannot hit a `products.manage`-gated endpoint.

### 3.2 Catalog / Listings

- Tables: `categories` (self-referencing tree), `brands`, `products`, `product_images`, `product_specifications`, `reviews` — per `database-schema.md`. `product_variants` exists in the schema but nothing in the current frontend type/UI uses it — leave the table in place for future use, but Resources should omit variant data entirely rather than emit an always-empty array.
- `stock_status` is **computed, not stored** (per `database-schema.md`) — one `StockStatusResolver` (a tiny service, not duplicated logic) used by both `ProductResource` and the admin Inventory endpoint, so there is exactly one low-stock-threshold formula in the whole system. (The frontend currently duplicates a version of this threshold client-side for its mock-data Inventory page — once this endpoint is live, that client-side computation should be deleted in favor of trusting the server's field.)
- Search via Scout + Meilisearch, **`SCOUT_QUEUE=true`** so indexing never blocks a product write.
- Reviews: submission gated to verified purchasers (an order in `delivered` status containing the product) — enforced in `SubmitReviewAction`, not just a UI affordance. Moderation queue (`pending`/`approved`/`rejected`) backs the admin Reviews tab exactly as built.
- Flash deals: `is_flash_deal` + `flash_deal_ends_at` columns directly on `products` (matches the frontend `Product` type as-is) — resist the urge to build a separate promotions table the frontend doesn't ask for.
- Every list endpoint (`/products`, `/admin/products`, `/admin/categories`, `/admin/brands`) built with `spatie/laravel-query-builder` per §2.

**Exit criterion**: `/products?categorySlug=laptops&brandSlugs[]=dell&sort=price_asc` returns a paginated, correctly filtered/sorted result matching `PaginatedResponse<Product>` exactly, verified by a contract test (§5).

### 3.3 Buying: cart → checkout → payment

- Guest cart (session-keyed) + user cart, merged on login via `MergeGuestCartAction`. Cart items snapshot `unit_price` at add-time (per schema), but **checkout always re-validates current price and stock** — never trusts a stale cart snapshot. This is a correctness rule, not an implementation detail: state it explicitly in the `PlaceOrderAction` docblock so nobody "optimizes" it away later.
- `ValidateCouponAction`: checks `is_active`/`starts_at`/`expires_at`/`usage_limit` vs `used_count`, computes the discount. Reused verbatim by `/coupons/validate` (preview) and by checkout (real application) — same class, two callers, see §2.
- `PricingService`: subtotal, delivery fee, VAT, coupon discount, total — the **one** authoritative place these numbers are computed. The frontend's own `lib/pricing.ts` is a client-side preview for optimistic UI only; the server recomputes and is the only source that can ever be trusted for what a customer is actually charged. Never accept a client-submitted total.
- `PlaceOrderAction` — the single highest-value, highest-test-coverage class in the system:
  1. Re-validate every cart line's stock and current price.
  2. `DB::transaction()`; `lockForUpdate()` the relevant `inventory_items` rows; decrement quantity; if any line is now oversold, throw and roll back the whole order — **this is the concrete fix for the classic e-commerce bug where two concurrent checkouts both "succeed" against the last unit in stock.**
  3. Create `orders` + `order_items` (name/sku/price snapshots, per schema).
  4. Insert the first `order_status_history` row (`pending`).
  5. Dispatch `OrderPlaced` (queued listeners: confirmation email/SMS, low-stock alert if the decrement crossed the threshold).
  6. Initiate payment via the gateway manager below.
  7. Commit.
- **Payments** behind one `PaymentGatewayContract` (`initiate(Order): PaymentIntent`, `handleWebhook(Request): void`), resolved by a `PaymentGatewayManager` (the same pattern Laravel itself uses for `Cache`/`Queue` drivers) keyed off `payment_method`:
  - `MpesaGateway` — thin custom Daraja HTTP client (STK push + callback). Order is created `pending`; the **callback webhook**, not client-side polling, is what flips payment/order status — webhooks must be idempotent (dedupe on `provider_reference` before processing) and the callback endpoint must verify authenticity (IP allowlist and/or Daraja's signature scheme) before trusting it.
  - `CardGateway` — recommend Paystack or Flutterwave (both support KES + Visa/Mastercard, both have maintained Laravel-friendly SDKs). Whichever is chosen lives entirely behind this one interface — switching providers later is one new class, zero controller/Action changes.
  - `CashOnDeliveryGateway` — a no-op `initiate()`; payment marked `pending` until delivery is confirmed.

**Exit criterion**: a guest can add items to cart, apply a valid coupon, pay via the M-Pesa sandbox, and see the order appear correctly in `/admin/orders` — plus a Pest test firing 20 concurrent checkout requests against a 1-unit-stock product and asserting exactly one succeeds.

### 3.4 Order processing (post-purchase lifecycle)

- Explicit state machine, enforced server-side regardless of what the admin UI's dropdown happens to offer (never trust the client to only send valid transitions):

  ```
  pending → processing → packing → shipped → delivered
                 ↘                    ↘
              cancelled              refunded   (terminal branches)
  ```

- `TransitionOrderStatusAction` — validates the transition against the table above (throws `InvalidOrderTransitionException` otherwise), appends `order_status_history`, dispatches `OrderStatusChanged` (queued: customer email/SMS gated by the *customer's* notification preferences and the admin Settings toggles already built in the frontend — `emailOnNewOrder`, `smsOnOrderShipped` — plus dashboard/report cache invalidation).
- `RequestReturnAction` (customer) → admin approve/reject → `ProcessRefundAction` on approval (restocks the returned quantity, writes a `payments` refund record, marks the order `refunded` once fully returned).
- `GET /admin/orders` is **one endpoint** serving both the Kanban and table views (per `api-design.md`) — `spatie/query-builder` with `status` and `paymentMethod` as allowed filters, same param names the frontend's URL-driven filter state already uses, so there's no translation layer between "what the frontend puts in the URL" and "what the API accepts."

**Exit criterion**: every legal transition works, every illegal one (e.g. `delivered → pending`) is rejected with a 422 and never touches `order_status_history`, and a customer/admin both see the same timeline data the frontend's existing `OrderTimeline` component already knows how to render unmodified.

### 3.5 Supporting admin domains (built once the buying flow is solid)

Inventory/Warehouses, CRM (leads/quotations), Marketing (coupons/banners/reviews — reviews already covered in §3.2), Returns — all follow the same Controller→FormRequest→Action→Resource shape as everything above; nothing new architecturally, just more domains through the same pipeline. The only two worth calling out specifically:

- **Reports**: aggregation queries are expensive at scale — cache computed dashboard numbers (`Cache::remember('admin.reports.summary', now()->addMinutes(2), fn () => ...)`), invalidated by the relevant model events (new order, new customer). This mirrors the frontend's own React Query caching tiers (`docs/admin-data-loading-plan.md`) — both sides now cache the same numbers, so a cache miss on either side is still fast.
- **AI Insights**: a scheduled Artisan command (nightly, or hourly if useful) analyzes recent orders/stock/traffic and **writes rows to the new `ai_insights` table** (§0). The `GET /admin/ai-insights` endpoint only ever reads that table — it never computes anything synchronously inside a request, however the analysis is implemented (rule-based now, an LLM call later — that choice is fully isolated inside the scheduled command and never touches request latency).

### 3.6 New table needed: `ai_insights`

```
ai_insights
  id ulid pk
  title string
  description text
  impact enum(high, medium, low)
  metric_label string
  metric_value string
  created_at
```

Matches `AIInsight` in `src/types/admin.ts` exactly.

## 4. Cross-cutting scalability, stability & security

- **Concurrency correctness** is the single highest-risk bug class in an e-commerce backend. Every multi-step write — checkout, status transitions, refunds, manual stock adjustments — runs inside `DB::transaction()`, and any inventory decrement locks the relevant rows with `lockForUpdate()` first. This is called out explicitly (not left implicit) because it's the one class of bug that's invisible in manual testing and only shows up under real concurrent load.
- **Idempotency** on every externally-triggered endpoint (payment webhooks above all) — networks retry, webhooks arrive more than once, dedupe by provider reference before acting.
- **N+1 prevention**: `Model::preventLazyLoading(! app()->isProduction())` in `AppServiceProvider` turns any accidental N+1 into a loud exception in dev/CI instead of a silent slow endpoint in production. Combined with deliberate eager-loading (`->with([...])`) as a required part of every Resource-backed query.
- **Indexing**: every foreign key, every column used as a `spatie/query-builder` filter or sort (`category_id`, `brand_id`, `status`, `created_at`, `sku`), gets an index from the migration that introduces it — not added reactively after a slow-query report.
- **Caching tiers**: reference data (categories, brands, settings) cached with a long TTL and explicit invalidation on write; reports cached short-TTL; product listing relies on Meilisearch's own speed rather than a DB-side cache. A one-line table per domain, same shape as the frontend's own `staleTime` table in `docs/admin-data-loading-plan.md` — deliberately symmetric, so "how fresh is this data allowed to be" is answered once per domain and both layers agree.
- **Rate limiting**: named limiters (`RateLimiter::for('auth', ...)`, `('checkout', ...)`, `('webhooks', ...)`) — auth and payment endpoints get the tightest limits.
- **Horizontal scalability**: Redis for sessions/cache/queues (never the file or database driver) so any number of app servers can sit behind a load balancer with no shared local state; queue workers (via Horizon) scale independently of web workers; all uploaded images go to S3-compatible object storage, never local disk, for the same reason.
- **Observability**: JSON-structured logs in production, exception tracking (Sentry or equivalent), Telescope restricted to non-production, a `/health` endpoint checking DB/Redis/queue connectivity for the load balancer, recurring review of the slow-query log.
- **Security discipline**: Form Request validation + Policy authorization on every mutating endpoint with no exceptions, explicit `$fillable` on every model (never `$guarded = []`), CORS locked to the known frontend origin(s), webhook signature/IP verification for M-Pesa callbacks, file upload MIME/size validation for images, secrets only in `.env` (never committed — the same discipline already verified clean on this frontend repo applies here from day one).

## 5. Testing & quality gates

- **One Pest feature test class per controller.** Every test asserts the happy path *and* a **contract check**: `assertJsonStructure()` built directly from the corresponding `src/types/*.ts` interface, so a Resource accidentally dropping or renaming a field fails CI immediately rather than surfacing as a silent frontend bug weeks later. This is the single most important quality gate in this whole plan, given the frontend already exists and cannot silently absorb a mismatched contract.
- **Model factories for every model**, seeded to reproduce the same fixtures already living in `src/lib/mock-data.ts`/`mock-admin-data.ts` — local and staging environments then look identical to what the frontend was designed and screenshotted against, and manual QA is a direct comparison rather than guesswork.
- **Larastan (level 6+) and Pint** as required CI gates — the same non-negotiable discipline the frontend already holds itself to (`tsc --noEmit` / `eslint`, both clean before merge throughout this project).
- **CI pipeline**: lint (Pint) → static analysis (Larastan) → `migrate:fresh --seed` → full Pest suite, gating every PR. No merge on red.

## 6. Phased delivery plan

| Phase | Scope | Exit criterion |
|---|---|---|
| 0 | Scaffold, packages, CI, base config (§1) | `migrate:fresh --seed` runs clean in CI on an empty database |
| 1 | Auth + Users/Roles/Permissions (§3.1) | Restricted-role Pest test from §3.1 passes |
| 2 | Catalog/Listings + Search (§3.2) | Filtered/sorted `/products` contract test from §3.2 passes |
| 3 | Cart + Checkout + Payments (§3.3) | Concurrent-checkout Pest test from §3.3 passes; M-Pesa sandbox round-trip works |
| 4 | Order processing + notifications (§3.4) | Illegal-transition rejection test from §3.4 passes |
| 5 | Admin ops: inventory/warehouses/CRM/marketing/returns (§3.5) | Every remaining `api-design.md` admin endpoint has a passing contract test |
| 6 | Reports + AI Insights (new table) + Settings + Audit logs | Reports respond from cache on the second call within its TTL; nightly AI-insights command populates `ai_insights` |
| 7 | Hardening: load test the checkout path specifically, security review, observability wiring | Checkout path holds up under simulated concurrent load with zero overselling; `/health` green |

Each phase's migrations/models/policies/Form Requests/Actions/Resources/routes/tests are built in that order — tests are written alongside each Action, not bolted on afterward.

## 7. Frontend follow-ups this plan implies

- `src/lib/api-client.ts` needs a one-time `GET /sanctum/csrf-cookie` call wired in before the first mutating request, once real Sanctum auth lands (§3.1).
- Per `docs/admin-data-loading-plan.md`'s own rollout order: each `features/admin/<domain>/api/fetchers.ts` swaps its mock-array body for a real `apiClient` call **one domain at a time, as that domain's phase above lands** — no other frontend file changes, by design.
- Once `/products` (or `/admin/inventory`) reliably returns a server-computed `stockStatus`, delete the client-side threshold-computation helpers in `src/app/admin/inventory/page.tsx` and `src/features/admin/products/api/fetchers.ts` that currently stand in for it.
