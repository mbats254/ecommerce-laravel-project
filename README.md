# Anchor API

Laravel backend for the Anchor Technologies e-commerce platform, serving the
`anchor-website` frontend against the contract defined in
[`docs/database-schema.md`](docs/database-schema.md) and
[`docs/api-design.md`](docs/api-design.md). Build sequence and engineering
discipline are defined in
[`laravel-api-implementation-plan.md`](laravel-api-implementation-plan.md).

**Status**: Phase 0 (scaffold) complete. No domain code yet — see the phased
delivery plan in the implementation plan for what's next.

## Stack

- Laravel 12, PHP 8.3+ (developed on PHP 8.4)
- MySQL 8 (Redis for cache, sessions, and queues — never file/database drivers)
- Laravel Sanctum (SPA cookie auth for the storefront and admin portal)
- Laravel Scout + Meilisearch (product search)
- `spatie/laravel-permission` (roles/permissions)
- `spatie/laravel-query-builder` (list endpoint filtering/sorting)
- Laravel Horizon (queue dashboard — requires `ext-pcntl`/`ext-posix`, Linux-only)
- Laravel Telescope (local/staging only, never registered in production)
- Pest, Larastan (level 6), Pint — CI quality gates

## Local setup

1. `composer install`
2. Copy `.env.example` to `.env` and fill in DB/Redis/Meilisearch credentials,
   then `php artisan key:generate`
3. Create the database named in `DB_DATABASE` (MySQL 8; a modern MariaDB works
   for local dev)
4. Start Redis (required for cache/session/queue — see note below)
5. `php artisan migrate --seed`
6. `php artisan serve`

### Windows-specific notes

- **Horizon** needs `ext-pcntl`/`ext-posix`, which don't exist on native
  Windows PHP. `composer.json` carries a `config.platform` override so
  dependency resolution succeeds on Windows, but `php artisan horizon` itself
  must run under WSL2, Docker, or a Linux box — use `php artisan queue:work`
  for local queue testing on native Windows instead.
- **Redis**: run it via Docker (`docker run -p 6379:6379 redis`) or WSL2. There
  is no native Windows Redis service in this setup.

## Testing & quality gates

```
composer install
vendor/bin/pint --test          # style
vendor/bin/phpstan analyse      # static analysis (level 6)
php artisan migrate:fresh --seed
vendor/bin/pest                 # feature/unit tests (sqlite in-memory, no Redis needed)
```

All four gate CI on every PR — see `.github/workflows/ci.yml`. No merge on red.

## Architecture

Route → Controller (thin) → Form Request → Action (business logic) →
Eloquent model + scopes → API Resource, with Events/queued Listeners for side
effects. Full rationale in
[`laravel-api-implementation-plan.md`](laravel-api-implementation-plan.md#2-application-architecture--where-reusability-and-efficiency-actually-come-from).
