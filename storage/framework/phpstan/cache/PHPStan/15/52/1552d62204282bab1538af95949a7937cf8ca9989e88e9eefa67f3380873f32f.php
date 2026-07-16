<?php declare(strict_types = 1);

// odsl-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\app\Actions\Order\CancelOrderAction.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Actions\Order\CancelOrderAction
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.18-0c776e993e5b660225f8b7c6874f7946b9c665cf4e7f8347cc37b0c4702aa683',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Actions\\Order\\CancelOrderAction',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/app/Actions/Order/CancelOrderAction.php',
      ),
    ),
    'namespace' => 'App\\Actions\\Order',
    'name' => 'App\\Actions\\Order\\CancelOrderAction',
    'shortName' => 'CancelOrderAction',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 32,
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
      'CANCELLABLE_STATUSES' => 
      array (
        'declaringClassName' => 'App\\Actions\\Order\\CancelOrderAction',
        'implementingClassName' => 'App\\Actions\\Order\\CancelOrderAction',
        'name' => 'CANCELLABLE_STATUSES',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[\\App\\Enums\\OrderStatus::Pending, \\App\\Enums\\OrderStatus::Processing]',
          'attributes' => 
          array (
            'startLine' => 16,
            'endLine' => 16,
            'startTokenPos' => 38,
            'startFilePos' => 441,
            'endTokenPos' => 47,
            'endFilePos' => 487,
          ),
        ),
        'docComment' => '/**
 * Orders can only be cancelled by the customer before they\'ve shipped.
 * Once packing/shipped/delivered, only the admin-driven status state
 * machine (TransitionOrderStatusAction) governs further transitions.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 89,
      ),
    ),
    'immediateProperties' => 
    array (
      'transitionOrderStatus' => 
      array (
        'declaringClassName' => 'App\\Actions\\Order\\CancelOrderAction',
        'implementingClassName' => 'App\\Actions\\Order\\CancelOrderAction',
        'name' => 'transitionOrderStatus',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Actions\\Order\\TransitionOrderStatusAction',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 9,
        'endColumn' => 75,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'transitionOrderStatus' => 
          array (
            'name' => 'transitionOrderStatus',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Actions\\Order\\TransitionOrderStatusAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 9,
            'endColumn' => 75,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 18,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Actions\\Order',
        'declaringClassName' => 'App\\Actions\\Order\\CancelOrderAction',
        'implementingClassName' => 'App\\Actions\\Order\\CancelOrderAction',
        'currentClassName' => 'App\\Actions\\Order\\CancelOrderAction',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'order' => 
          array (
            'name' => 'order',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Models\\Order',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 28,
            'endColumn' => 39,
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
            'name' => 'App\\Models\\Order',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 22,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Actions\\Order',
        'declaringClassName' => 'App\\Actions\\Order\\CancelOrderAction',
        'implementingClassName' => 'App\\Actions\\Order\\CancelOrderAction',
        'currentClassName' => 'App\\Actions\\Order\\CancelOrderAction',
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