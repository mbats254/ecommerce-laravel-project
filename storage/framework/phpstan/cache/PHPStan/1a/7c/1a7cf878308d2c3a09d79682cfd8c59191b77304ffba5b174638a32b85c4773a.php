<?php declare(strict_types = 1);

// odsl-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\app\Services\OrderNumberGenerator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Services\OrderNumberGenerator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.18-3200218edb397e57c48f8c2d2c6d9b2036a35502753bbf8de729c2d7f26e7da9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Services\\OrderNumberGenerator',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/app/Services/OrderNumberGenerator.php',
      ),
    ),
    'namespace' => 'App\\Services',
    'name' => 'App\\Services\\OrderNumberGenerator',
    'shortName' => 'OrderNumberGenerator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Generates human-friendly, sequential order numbers ("AT10452") using an
 * atomic Redis increment rather than a second auto-increment column — MySQL
 * only allows one AUTO_INCREMENT column per table, and that\'s already the
 * ulid-generating primary key.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 25,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'CACHE_KEY' => 
      array (
        'declaringClassName' => 'App\\Services\\OrderNumberGenerator',
        'implementingClassName' => 'App\\Services\\OrderNumberGenerator',
        'name' => 'CACHE_KEY',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'orders.sequence\'',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 28,
            'startFilePos' => 399,
            'endTokenPos' => 28,
            'endFilePos' => 415,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 48,
      ),
      'STARTING_SEQUENCE' => 
      array (
        'declaringClassName' => 'App\\Services\\OrderNumberGenerator',
        'implementingClassName' => 'App\\Services\\OrderNumberGenerator',
        'name' => 'STARTING_SEQUENCE',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '10000',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 39,
            'startFilePos' => 457,
            'endTokenPos' => 39,
            'endFilePos' => 462,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 45,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'generate' => 
      array (
        'name' => 'generate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 19,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services',
        'declaringClassName' => 'App\\Services\\OrderNumberGenerator',
        'implementingClassName' => 'App\\Services\\OrderNumberGenerator',
        'currentClassName' => 'App\\Services\\OrderNumberGenerator',
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