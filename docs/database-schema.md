# Database Schema (MySQL 8, Laravel 12 migrations)

Design reference for the `anchor-api` Laravel backend. All tables use `ulid`
primary keys (sortable, safe to expose in URLs/order numbers), `created_at` /
`updated_at`, and `deleted_at` (soft deletes) unless noted. Money columns are
`decimal(12,2)` in KES. This mirrors the TypeScript interfaces in
`src/types/*.ts` on the frontend — keep both in sync as the schema evolves.

## Identity & access

```
users
  id ulid pk
  name string
  email string unique
  phone string nullable
  password string
  avatar_url string nullable
  email_verified_at timestamp nullable
  last_login_at timestamp nullable

roles                 -- spatie/laravel-permission
  id, name, guard_name

permissions            -- spatie/laravel-permission
  id, name, guard_name

model_has_roles / model_has_permissions / role_has_permissions   -- spatie pivot tables

personal_access_tokens  -- Laravel Sanctum

addresses
  id ulid pk
  user_id fk -> users
  label string nullable            -- "Home", "Office"
  full_name string
  phone string
  county string
  city string nullable
  address_line string
  is_default boolean default false

audit_logs
  id ulid pk
  user_id fk -> users nullable
  action string                    -- "product.updated", "order.status_changed"
  subject_type string
  subject_id ulid
  changes json nullable
  ip_address string nullable
  created_at
```

## Catalog

```
brands
  id ulid pk
  name string
  slug string unique
  logo_path string nullable
  is_active boolean default true

categories
  id ulid pk
  parent_id fk -> categories nullable   -- self-referencing tree
  name string
  slug string unique
  icon_path string nullable
  position int default 0
  is_active boolean default true

products
  id ulid pk
  category_id fk -> categories
  brand_id fk -> brands
  name string
  slug string unique
  sku string unique
  short_description string
  description text nullable
  price decimal(12,2)
  compare_at_price decimal(12,2) nullable
  status enum(draft, active, archived) default draft
  is_featured boolean default false
  meta_title string nullable        -- SEO
  meta_description string nullable  -- SEO

product_images
  id ulid pk
  product_id fk -> products
  path string                       -- S3 key
  alt string nullable
  position int default 0

product_specifications
  id ulid pk
  product_id fk -> products
  group string                      -- "Display", "Processor", ...
  label string
  value string
  position int default 0

product_variants                    -- optional; simple products have none
  id ulid pk
  product_id fk -> products
  name string                       -- "16GB RAM / 512GB SSD"
  sku string unique
  price_delta decimal(12,2) default 0

reviews
  id ulid pk
  product_id fk -> products
  user_id fk -> users
  order_id fk -> orders nullable    -- verified-purchase check
  rating tinyint (1-5)
  title string nullable
  body text nullable
  status enum(pending, approved, rejected) default pending
```

## Inventory

```
warehouses
  id ulid pk
  name string
  location string
  is_active boolean default true

inventory_items
  id ulid pk
  warehouse_id fk -> warehouses
  product_id fk -> products
  variant_id fk -> product_variants nullable
  quantity int default 0
  low_stock_threshold int default 5
  unique(warehouse_id, product_id, variant_id)
```

`stock_status` (in_stock / low_stock / out_of_stock) is derived, not stored —
computed from `sum(quantity)` vs `low_stock_threshold` across warehouses.

## Cart & orders

```
carts
  id ulid pk
  user_id fk -> users nullable       -- nullable: guest carts keyed by session
  session_id string nullable

cart_items
  id ulid pk
  cart_id fk -> carts
  product_id fk -> products
  variant_id fk -> product_variants nullable
  quantity int
  unit_price decimal(12,2)           -- snapshot at add-time

orders
  id ulid pk
  order_number string unique          -- "AT10452"
  user_id fk -> users
  status enum(pending, processing, packing, shipped, delivered, cancelled, refunded)
  subtotal decimal(12,2)
  delivery_fee decimal(12,2)
  vat decimal(12,2)
  total decimal(12,2)
  payment_method enum(mpesa, card, cash_on_delivery)
  shipping_address_id fk -> addresses
  coupon_id fk -> coupons nullable
  placed_at timestamp

order_items
  id ulid pk
  order_id fk -> orders
  product_id fk -> products
  variant_id fk -> product_variants nullable
  product_name string                -- snapshot
  sku string                         -- snapshot
  quantity int
  unit_price decimal(12,2)
  total decimal(12,2)

order_status_history
  id ulid pk
  order_id fk -> orders
  status string
  note string nullable
  occurred_at timestamp

payments
  id ulid pk
  order_id fk -> orders
  provider enum(mpesa, stripe, cash)
  provider_reference string nullable  -- M-Pesa receipt number
  amount decimal(12,2)
  status enum(pending, successful, failed)
  paid_at timestamp nullable

returns
  id ulid pk
  order_id fk -> orders
  order_item_id fk -> order_items
  reason string
  status enum(requested, approved, rejected, refunded)
  requested_at timestamp
```

## Marketing

```
coupons
  id ulid pk
  code string unique
  type enum(percentage, fixed)
  value decimal(12,2)
  usage_limit int nullable
  used_count int default 0
  starts_at timestamp nullable
  expires_at timestamp nullable
  is_active boolean default true

banners                              -- Homepage Banner Manager
  id ulid pk
  title string
  image_path string
  link_url string nullable
  position enum(hero, promo_strip, category_top)
  starts_at timestamp nullable
  expires_at timestamp nullable
  is_active boolean default true

wishlists
  id ulid pk
  user_id fk -> users
  product_id fk -> products
  unique(user_id, product_id)

compare_lists
  id ulid pk
  user_id fk -> users
  product_id fk -> products
  unique(user_id, product_id)
```

## CRM / B2B

```
leads                                -- CRM module
  id ulid pk
  company_name string nullable
  contact_name string
  email string
  phone string
  source string nullable
  status enum(new, contacted, qualified, lost, won)
  assigned_to fk -> users nullable

quotations
  id ulid pk
  lead_id fk -> leads nullable
  customer_id fk -> users nullable
  status enum(draft, sent, accepted, declined, expired)
  total decimal(12,2)
  valid_until date nullable

quotation_items
  id ulid pk
  quotation_id fk -> quotations
  product_id fk -> products
  quantity int
  unit_price decimal(12,2)
```

## Support & notifications

```
support_tickets
  id ulid pk
  user_id fk -> users
  order_id fk -> orders nullable
  subject string
  status enum(open, pending, resolved, closed)
  priority enum(low, medium, high)

support_ticket_messages
  id ulid pk
  ticket_id fk -> support_tickets
  author_id fk -> users
  body text

notifications                        -- Laravel's built-in notifications table
  id uuid pk, type, notifiable_type, notifiable_id, data json, read_at, created_at
```

## Search & caching (not MySQL tables)

- **Meilisearch** indexes: `products` (searchable: name, sku, brand, category,
  specifications; filterable: category_id, brand_id, price, stock_status).
- **Redis**: session/cache store, Horizon queues (order emails, M-Pesa STK
  push polling, low-stock alerts, AI-insight report generation).
