# Anchor API

Laravel backend for the Anchor Technologies e-commerce platform, serving the
`anchor-website` frontend against the contract defined in
[`docs/database-schema.md`](docs/database-schema.md) and
[`docs/api-design.md`](docs/api-design.md). Build sequence and engineering
discipline are defined in
[`laravel-api-implementation-plan.md`](laravel-api-implementation-plan.md).
CI/CD and deployment plan: [`docs/ci-cd-deployment-plan.md`](docs/ci-cd-deployment-plan.md).

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
- If your machine already has other PHP versions installed (e.g. 8.2, 7.4) for
  other projects, use the Docker setup below instead of native PHP — it runs
  this project on its own PHP 8.4 without touching your local PHP install.

## Docker setup (recommended on Windows / mixed-PHP-version machines)

Runs the whole stack — PHP 8.4, MySQL 8, Redis, Meilisearch, Horizon, and the
scheduler — in containers, isolated from any other PHP versions installed on
the host.

1. Copy `.env.example` to `.env` and run `php artisan key:generate` (or reuse
   an existing `.env`) — the same file is used both for Laravel config and for
   naming the MySQL database container. Host-facing values like `DB_HOST` and
   `REDIS_HOST` are overridden automatically for the containers in
   `docker-compose.yml`, so leave them as `127.0.0.1` in `.env`.
2. `docker compose up -d --build`
3. `docker compose exec app php artisan migrate --seed` (first run only)

Services and host ports:

| Service     | Container        | Host port                    |
|-------------|------------------|-------------------------------|
| App (API)   | `webserver`      | http://localhost:8000         |
| MySQL       | `mysql`          | localhost:3307                |
| Redis       | `redis`          | localhost:6380                |
| Meilisearch | `meilisearch`    | http://localhost:7701          |

Non-default host ports (3307, 6380, 7701) avoid clashing with any MySQL/Redis
already running locally for other projects. Containers talk to each other on
their standard ports over the internal `anchor` network.

Common commands:

```
docker compose exec app php artisan <command>   # run artisan inside the container
docker compose exec app php artisan test        # run the test suite
docker compose logs -f horizon                  # tail queue worker logs
docker compose down                             # stop everything (data volumes persist)
```

`vendor/` is stored in a named Docker volume, not bind-mounted from the host —
this keeps the container's PHP 8.4 dependency build separate from whatever
`vendor/` your host PHP has installed.

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
