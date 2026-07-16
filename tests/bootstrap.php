<?php

/**
 * PHPUnit's <env force="true"> (phpunit.xml) only overrides getenv()/$_ENV,
 * not $_SERVER. Running tests inside the Docker dev container, whose
 * env_file setting sets real APP_ENV, DB_CONNECTION, etc. as OS-level env
 * vars, means those land in $_SERVER at process start, and Laravel's env()
 * resolution checks $_SERVER too. A stale $_SERVER entry then wins over the
 * correctly forced getenv()/$_ENV value. Clearing the same keys phpunit.xml
 * overrides lets its forced values apply consistently regardless of what
 * the real container environment happens to set.
 */
$testEnvKeys = [
    'APP_ENV', 'APP_MAINTENANCE_DRIVER', 'BCRYPT_ROUNDS', 'BROADCAST_CONNECTION',
    'CACHE_STORE', 'DB_CONNECTION', 'DB_DATABASE', 'DB_URL', 'MAIL_MAILER',
    'QUEUE_CONNECTION', 'SESSION_DRIVER', 'SCOUT_DRIVER', 'PULSE_ENABLED',
    'TELESCOPE_ENABLED', 'NIGHTWATCH_ENABLED',
];

foreach ($testEnvKeys as $key) {
    unset($_SERVER[$key]);
}

require __DIR__.'/../vendor/autoload.php';
