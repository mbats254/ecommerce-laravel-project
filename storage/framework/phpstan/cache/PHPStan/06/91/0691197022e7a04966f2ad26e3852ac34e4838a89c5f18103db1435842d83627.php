<?php declare(strict_types = 1);

// odsl-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\database\seeders\AuditLogSeeder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Database\Seeders\AuditLogSeeder
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.18-a341c0cc8c4dd347f0c30a0d1d38108bfbb0daf5f8151617cdfd5de7d5f31692',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Database\\Seeders\\AuditLogSeeder',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/database/seeders/AuditLogSeeder.php',
      ),
    ),
    'namespace' => 'Database\\Seeders',
    'name' => 'Database\\Seeders\\AuditLogSeeder',
    'shortName' => 'AuditLogSeeder',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * The Auditable trait (app/Concerns/Auditable.php) would normally write
 * these rows automatically, but every seeder here runs under
 * WithoutModelEvents to avoid a flood of notifications/cache-invalidation
 * side effects during seeding — so audit_logs needs its own seeder to give
 * GET /admin/audit-logs something realistic to show. Runs last, once
 * categories/products/settings/users already exist, so it can reference
 * real subject IDs.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 63,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Seeder',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'run' => 
      array (
        'name' => 'run',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 26,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Database\\Seeders',
        'declaringClassName' => 'Database\\Seeders\\AuditLogSeeder',
        'implementingClassName' => 'Database\\Seeders\\AuditLogSeeder',
        'currentClassName' => 'Database\\Seeders\\AuditLogSeeder',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));