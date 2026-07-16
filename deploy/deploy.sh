#!/usr/bin/env bash
# Runs ON THE SERVER (invoked over SSH by the GitLab `deploy` job — see
# .gitlab-ci.yml and docs/ci-cd-deployment-plan.md, Phase 5).
#
# Usage: deploy.sh <image-tag>
#
# Expects to live in the same directory as docker-compose.prod.yml and .env
# (default: /opt/anchor-api, see Phase 4 of the plan doc for server layout).
set -euo pipefail

IMAGE_TAG="${1:?Usage: deploy.sh <image-tag>}"
REGISTRY_IMAGE="${REGISTRY_IMAGE:?REGISTRY_IMAGE must be set}"
APP_DIR="${APP_DIR:-/opt/anchor-api}"
HEALTH_URL="${HEALTH_URL:-http://localhost:8000/up}"

cd "$APP_DIR"

export REGISTRY_IMAGE
export IMAGE_TAG

echo "==> Pulling $REGISTRY_IMAGE (app/web) at $IMAGE_TAG"
docker compose -f docker-compose.prod.yml pull app webserver

echo "==> Running pending migrations against the new image"
docker compose -f docker-compose.prod.yml run --rm app php artisan migrate --force

echo "==> Recreating app, horizon, scheduler, and webserver on the new image"
docker compose -f docker-compose.prod.yml up -d --no-deps app horizon scheduler webserver

echo "==> Waiting for $HEALTH_URL to report healthy"
for _ in $(seq 1 15); do
    if curl -fsS "$HEALTH_URL" > /dev/null 2>&1; then
        echo "Deploy OK: $IMAGE_TAG"
        exit 0
    fi
    sleep 2
done

echo "Health check failed after deploying $IMAGE_TAG — investigate before retrying." >&2
echo "To roll back: re-run this script with the previous known-good tag." >&2
exit 1
