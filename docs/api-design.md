# API Design (Laravel 12, REST, `/api/v1`)

Design reference for `anchor-api`. Matches `src/lib/api-client.ts` and the
TanStack Query hooks each feature module will add under `features/<name>/api/`.

## Conventions

- Base URL: `NEXT_PUBLIC_API_URL` (defaults to `http://localhost:8000/api/v1`).
- Auth: Laravel **Sanctum**, SPA cookie-based session for the storefront and
  admin portal (`credentials: "include"`, already wired in `api-client.ts`).
  Admin routes additionally require a role check (`spatie/laravel-permission`)
  via an `admin` middleware group.
- Pagination: `?page=&perPage=` query params; responses use the
  `PaginatedResponse<T>` shape (`{ data: T[], meta: { currentPage, perPage,
  total, lastPage } }`) matching `src/types/common.ts`.
- Errors: `422` for validation (`{ message, errors: Record<string,string[]> }`,
  matching `ApiError` in `api-client.ts`), `401`/`403` for auth, `404` for
  missing resources — no bespoke error shapes per endpoint.
- Filtering/sorting on list endpoints uses flat query params
  (`?categorySlug=&brandSlugs[]=&priceMin=&priceMax=&sort=&query=`), mirroring
  `ProductListFilters` in `src/types/catalog.ts`.

## Public storefront endpoints

```
GET    /categories                       tree of active categories (mega menu, PLP sidebar)
GET    /categories/{slug}                single category + breadcrumb

GET    /brands                           active brands (brand grid, PLP filter)
GET    /brands/{slug}

GET    /products                         paginated, filterable product list
GET    /products/{slug}                  full product detail (images, specs, reviews summary)
GET    /products/{slug}/reviews          paginated reviews for a product
POST   /products/{slug}/reviews          auth required; one per verified order

GET    /search?q=                        Meilisearch-backed instant search (typeahead)

GET    /flash-deals                      active flash-deal products + endsAt
GET    /banners?position=hero            active banners for a slot

POST   /cart                             create/merge guest cart (session-based)
GET    /cart
POST   /cart/items                       { productId, variantId?, quantity }
PATCH  /cart/items/{id}                  { quantity }
DELETE /cart/items/{id}

POST   /wishlist/{productId}             toggle
GET    /wishlist
POST   /compare/{productId}              toggle (max 4, mirrors COMPARE_LIMIT)
GET    /compare

POST   /coupons/validate                 { code, cartTotal } -> discount preview

POST   /checkout                         { shipping, deliveryMethod, paymentMethod }
                                          -> creates order, initiates payment
GET    /orders                           auth required; current user's orders
GET    /orders/{orderNumber}             order detail + timeline (order tracking page)
POST   /orders/{orderNumber}/cancel

POST   /payments/mpesa/stk-push          { orderId, phone } -> Safaricom Daraja STK push
POST   /payments/mpesa/callback          Daraja webhook (no auth; signature-verified)

POST   /auth/register
POST   /auth/login
POST   /auth/logout
GET    /auth/me
POST   /auth/password/forgot
POST   /auth/password/reset

GET    /account/addresses
POST   /account/addresses
PATCH  /account/addresses/{id}
DELETE /account/addresses/{id}

POST   /contact                          contact form submission -> notification/email
POST   /support/tickets                  auth required
GET    /support/tickets
GET    /support/tickets/{id}
POST   /support/tickets/{id}/messages
```

## Admin endpoints (`/admin` prefix, Sanctum + role middleware)

```
GET    /admin/dashboard                  KPI tiles + sales/orders-by-status chart data

GET    /admin/products                   list with admin-only fields (cost, status)
POST   /admin/products
GET    /admin/products/{id}
PUT    /admin/products/{id}
DELETE /admin/products/{id}
POST   /admin/products/{id}/images
POST   /admin/products/import            bulk CSV import (queued job)
GET    /admin/products/export

GET    /admin/categories                 flat + tree variants
POST   /admin/categories
PUT    /admin/categories/{id}
DELETE /admin/categories/{id}

GET    /admin/brands  POST /admin/brands  PUT /admin/brands/{id}  DELETE /admin/brands/{id}

GET    /admin/warehouses
POST   /admin/warehouses
GET    /admin/inventory                  low-stock view, per-warehouse breakdown
PATCH  /admin/inventory/{id}             adjust quantity (+ reason, audit-logged)

GET    /admin/orders                     kanban + table views share this endpoint
GET    /admin/orders/{id}
PATCH  /admin/orders/{id}/status         { status, note } -> appends order_status_history

GET    /admin/customers
GET    /admin/customers/{id}             profile + order history + support tickets

GET    /admin/crm/leads   POST /admin/crm/leads   PATCH /admin/crm/leads/{id}
GET    /admin/crm/quotations   POST /admin/crm/quotations   PATCH /admin/crm/quotations/{id}

GET    /admin/coupons  POST /admin/coupons  PUT /admin/coupons/{id}  DELETE /admin/coupons/{id}
GET    /admin/banners  POST /admin/banners  PUT /admin/banners/{id}  DELETE /admin/banners/{id}
GET    /admin/reviews  PATCH /admin/reviews/{id}          approve/reject

GET    /admin/returns  PATCH /admin/returns/{id}

GET    /admin/reports/sales             date-range params, export CSV
GET    /admin/reports/products
GET    /admin/reports/customers
GET    /admin/ai-insights               summarized anomalies/recommendations (queued job output)

GET    /admin/users   POST /admin/users   PUT /admin/users/{id}
GET    /admin/roles   POST /admin/roles   PUT /admin/roles/{id}       (spatie roles/permissions)
GET    /admin/audit-logs
GET    /admin/settings   PUT /admin/settings
```

## Queued jobs (Laravel Queues + Horizon)

- Order confirmation / shipment / delivery emails & SMS.
- M-Pesa STK push status polling + callback processing.
- Low-stock threshold alerts to admins.
- Product CSV import/export.
- Meilisearch index sync on product create/update/delete (via model observers).
- Scheduled AI-insights report generation (nightly).
