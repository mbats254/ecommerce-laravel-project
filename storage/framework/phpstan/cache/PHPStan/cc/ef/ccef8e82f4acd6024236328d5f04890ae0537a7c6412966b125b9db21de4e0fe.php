<?php declare(strict_types = 1);

// odsl-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\database\seeders\UserSeeder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Database\Seeders\UserSeeder
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.18-9e49272f1555644c409755a0f6f960ef06c61d9e091b1f110a75d21eac887251',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Database\\Seeders\\UserSeeder',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/database/seeders/UserSeeder.php',
      ),
    ),
    'namespace' => 'Database\\Seeders',
    'name' => 'Database\\Seeders\\UserSeeder',
    'shortName' => 'UserSeeder',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * One admin per Spatie role (see RolesAndPermissionsSeeder) plus a handful
 * of ordinary customers with addresses, so every role and the "customer"
 * case (a user with no role at all — see ReportsService::dashboard()\'s
 * whereDoesntHave(\'roles\') convention) has at least one login to test with.
 * Every seeded user shares UserFactory\'s default password ("password").
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 73,
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
        'startLine' => 21,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Database\\Seeders',
        'declaringClassName' => 'Database\\Seeders\\UserSeeder',
        'implementingClassName' => 'Database\\Seeders\\UserSeeder',
        'currentClassName' => 'Database\\Seeders\\UserSeeder',
        'aliasName' => NULL,
      ),
      'admin' => 
      array (
        'name' => 'admin',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'email' => 
          array (
            'name' => 'email',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'role' => 
          array (
            'name' => 'role',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 57,
            'endColumn' => 68,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
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
        'docComment' => '/**
 * Looked up by email first rather than firstOrCreate() — password has
 * no DB default, and firstOrCreate() inserts exactly the attributes
 * given without ever running the factory\'s definition(), so it would
 * insert a NULL password. Checking first and only falling back to the
 * factory when genuinely missing keeps every column defaulted properly
 * while still being safe to run twice (e.g. a plain `db:seed` on top of
 * an already-seeded database, not just `migrate:fresh --seed`).
 * syncRoles() rather than assignRole() for the same idempotency reason.
 */',
        'startLine' => 66,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Database\\Seeders',
        'declaringClassName' => 'Database\\Seeders\\UserSeeder',
        'implementingClassName' => 'Database\\Seeders\\UserSeeder',
        'currentClassName' => 'Database\\Seeders\\UserSeeder',
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