<?php declare(strict_types = 1);

// odsl-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\database\seeders\CatalogSeeder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Database\Seeders\CatalogSeeder
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.18-38bdf9b4be1c0f5e773231bb304acc4f10611f7e6e5abc3b08df556f2f1cd249',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Database\\Seeders\\CatalogSeeder',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/database/seeders/CatalogSeeder.php',
      ),
    ),
    'namespace' => 'Database\\Seeders',
    'name' => 'Database\\Seeders\\CatalogSeeder',
    'shortName' => 'CatalogSeeder',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 99,
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
        'docComment' => '/**
 * Run the database seeds. Every lookup is firstOrCreate() keyed on the
 * real unique column (slug/sku) so a plain `db:seed` on top of an
 * already-seeded database — not just `migrate:fresh --seed` — never
 * violates categories.slug / brands.slug / products.slug|sku. Nested
 * images/specs/inventory only get created alongside a genuinely new
 * product, so re-running doesn\'t pile up duplicate rows under it.
 */',
        'startLine' => 25,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Database\\Seeders',
        'declaringClassName' => 'Database\\Seeders\\CatalogSeeder',
        'implementingClassName' => 'Database\\Seeders\\CatalogSeeder',
        'currentClassName' => 'Database\\Seeders\\CatalogSeeder',
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