<?php declare(strict_types = 1);

// odsl-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\app\Http\Middleware\DefaultStatefulOriginForTesting.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Middleware\DefaultStatefulOriginForTesting
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.18-258d9a3e415d743523dc980e4d37705a03e24527a17f45f41dfb1ad19526763e',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Http\\Middleware\\DefaultStatefulOriginForTesting',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/app/Http/Middleware/DefaultStatefulOriginForTesting.php',
      ),
    ),
    'namespace' => 'App\\Http\\Middleware',
    'name' => 'App\\Http\\Middleware\\DefaultStatefulOriginForTesting',
    'shortName' => 'DefaultStatefulOriginForTesting',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Non-browser API clients (Postman, curl, mobile debugging tools) don\'t send
 * a Referer/Origin header, which Sanctum\'s EnsureFrontendRequestsAreStateful
 * requires to recognize a request as "from the frontend" and bootstrap
 * session support — without it, any session-touching endpoint (login,
 * logout) throws "Session store not set on request." Defaulting a Referer
 * here — non-production only — makes the API usable from tools like Postman
 * without relying on them successfully setting a header that some HTTP
 * clients restrict scripts from setting (Postman notably does).
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 31,
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
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 28,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'next' => 
          array (
            'name' => 'next',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 46,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Component\\HttpFoundation\\Response',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 21,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Middleware',
        'declaringClassName' => 'App\\Http\\Middleware\\DefaultStatefulOriginForTesting',
        'implementingClassName' => 'App\\Http\\Middleware\\DefaultStatefulOriginForTesting',
        'currentClassName' => 'App\\Http\\Middleware\\DefaultStatefulOriginForTesting',
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