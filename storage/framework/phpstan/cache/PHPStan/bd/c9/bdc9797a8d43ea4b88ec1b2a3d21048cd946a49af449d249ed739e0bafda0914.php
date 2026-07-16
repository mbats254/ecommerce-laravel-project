<?php declare(strict_types = 1);

// osfsl-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\app\Console\Commands\LoadTestCheckoutCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\LoadTestCheckoutCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a03bafb813d4cadd2c51987aa93a0a96c9113a4bcff5f0fd0ac2f0690e29f059-8.4.18-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/app/Console/Commands/LoadTestCheckoutCommand.php',
      ),
    ),
    'namespace' => 'App\\Console\\Commands',
    'name' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
    'shortName' => 'LoadTestCheckoutCommand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A genuine concurrency test, not the sequential-loop proxy Pest is limited
 * to (a single PHP process holds one DB connection, so Pest can only prove
 * the guard is correct when attempts are serialized, not that it survives
 * real simultaneous transactions). This spawns actual sibling OS processes —
 * each a fresh `php artisan` invocation with its own DB connection — so the
 * race condition PlaceOrderAction::decrementStock() guards against
 * (`lockForUpdate()` across concurrent transactions) is exercised for real.
 *
 * Requires MySQL: SQLite serializes all connections through a single
 * writer, which would make the test pass even if the locking were removed.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 27,
    'endLine' => 145,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Console\\Command',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'signature' => 
      array (
        'declaringClassName' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
        'implementingClassName' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'app:load-test-checkout
        {--units=5 : Units of stock to race concurrent checkouts against}
        {--concurrency=25 : Number of simultaneous checkout attempts}
        {--worker-for= : Internal use — runs a single checkout attempt for this user ID and exits}\'',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 35,
            'startTokenPos' => 72,
            'startFilePos' => 1090,
            'endTokenPos' => 72,
            'endFilePos' => 1358,
          ),
        ),
        'docComment' => '/**
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 102,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'description' => 
      array (
        'declaringClassName' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
        'implementingClassName' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
        'name' => 'description',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Fires genuinely concurrent OS-process checkout attempts against one product to prove the stock guard holds under real concurrent load.\'',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 83,
            'startFilePos' => 1426,
            'endTokenPos' => 83,
            'endFilePos' => 1561,
          ),
        ),
        'docComment' => '/**
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 166,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 42,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
        'implementingClassName' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
        'currentClassName' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
        'aliasName' => NULL,
      ),
      'runWorker' => 
      array (
        'name' => 'runWorker',
        'parameters' => 
        array (
          'userId' => 
          array (
            'name' => 'userId',
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
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 123,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
        'implementingClassName' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
        'currentClassName' => 'App\\Console\\Commands\\LoadTestCheckoutCommand',
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