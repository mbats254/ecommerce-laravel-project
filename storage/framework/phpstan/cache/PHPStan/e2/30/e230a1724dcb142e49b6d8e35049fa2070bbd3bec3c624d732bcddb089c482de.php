<?php declare(strict_types = 1);

// odsl-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\app\Listeners\SendOrderStatusChangedNotification.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Listeners\SendOrderStatusChangedNotification
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.18-d6e5627d6594ea0ccb4be5b432083957033d8b166356972dbf5ddcb1dd6c02a3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Listeners\\SendOrderStatusChangedNotification',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/app/Listeners/SendOrderStatusChangedNotification.php',
      ),
    ),
    'namespace' => 'App\\Listeners',
    'name' => 'App\\Listeners\\SendOrderStatusChangedNotification',
    'shortName' => 'SendOrderStatusChangedNotification',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Sends unconditionally for now. The plan gates this on the customer\'s
 * notification preferences and the admin Settings toggles (emailOnNewOrder,
 * smsOnOrderShipped) — neither exists yet (Settings is Phase 6). Revisit
 * once that lands.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 21,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
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
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Events\\OrderStatusChanged',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 28,
            'endColumn' => 52,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 17,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Listeners',
        'declaringClassName' => 'App\\Listeners\\SendOrderStatusChangedNotification',
        'implementingClassName' => 'App\\Listeners\\SendOrderStatusChangedNotification',
        'currentClassName' => 'App\\Listeners\\SendOrderStatusChangedNotification',
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