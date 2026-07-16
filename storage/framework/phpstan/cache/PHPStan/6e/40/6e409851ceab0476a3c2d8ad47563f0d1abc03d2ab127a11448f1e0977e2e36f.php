<?php declare(strict_types = 1);

// odsl-/var/www/html/app/Payments/PaymentGatewayManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Payments\PaymentGatewayManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.23-cc46b394670f090011e82b6dd467d30406597e5c35ad41753a1b8e6b52af03eb',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Payments\\PaymentGatewayManager',
        'filename' => '/var/www/html/app/Payments/PaymentGatewayManager.php',
      ),
    ),
    'namespace' => 'App\\Payments',
    'name' => 'App\\Payments\\PaymentGatewayManager',
    'shortName' => 'PaymentGatewayManager',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Resolves the correct gateway from an order\'s payment_method, the same
 * pattern Laravel itself uses for Cache/Queue drivers. Switching card
 * processors later is one new class + one new "create*Driver" method —
 * zero changes to any Action or Controller that calls this manager.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 37,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\Manager',
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
      'getDefaultDriver' => 
      array (
        'name' => 'getDefaultDriver',
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
        'startLine' => 18,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Payments',
        'declaringClassName' => 'App\\Payments\\PaymentGatewayManager',
        'implementingClassName' => 'App\\Payments\\PaymentGatewayManager',
        'currentClassName' => 'App\\Payments\\PaymentGatewayManager',
        'aliasName' => NULL,
      ),
      'createMpesaDriver' => 
      array (
        'name' => 'createMpesaDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Payments\\Gateways\\MpesaGateway',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 23,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Payments',
        'declaringClassName' => 'App\\Payments\\PaymentGatewayManager',
        'implementingClassName' => 'App\\Payments\\PaymentGatewayManager',
        'currentClassName' => 'App\\Payments\\PaymentGatewayManager',
        'aliasName' => NULL,
      ),
      'createCardDriver' => 
      array (
        'name' => 'createCardDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Payments\\Gateways\\StripeGateway',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 28,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Payments',
        'declaringClassName' => 'App\\Payments\\PaymentGatewayManager',
        'implementingClassName' => 'App\\Payments\\PaymentGatewayManager',
        'currentClassName' => 'App\\Payments\\PaymentGatewayManager',
        'aliasName' => NULL,
      ),
      'createCashOnDeliveryDriver' => 
      array (
        'name' => 'createCashOnDeliveryDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Payments\\Gateways\\CashOnDeliveryGateway',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 33,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Payments',
        'declaringClassName' => 'App\\Payments\\PaymentGatewayManager',
        'implementingClassName' => 'App\\Payments\\PaymentGatewayManager',
        'currentClassName' => 'App\\Payments\\PaymentGatewayManager',
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