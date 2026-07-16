<?php declare(strict_types = 1);

// ftm-/var/www/html/app/Actions/Checkout/PlaceOrderAction.php
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v5-2.3.2',
   'data' => 
  array (
    0 => 
    array (
      '64b493e841d9b66b6c0038837948db5e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Actions\\Checkout',
         'uses' => 
        array (
          'validatecouponaction' => 'App\\Actions\\Marketing\\ValidateCouponAction',
          'orderstatus' => 'App\\Enums\\OrderStatus',
          'paymentmethod' => 'App\\Enums\\PaymentMethod',
          'paymentstatus' => 'App\\Enums\\PaymentStatus',
          'productstatus' => 'App\\Enums\\ProductStatus',
          'orderplaced' => 'App\\Events\\OrderPlaced',
          'cart' => 'App\\Models\\Cart',
          'inventoryitem' => 'App\\Models\\InventoryItem',
          'order' => 'App\\Models\\Order',
          'user' => 'App\\Models\\User',
          'paymentgatewaymanager' => 'App\\Payments\\PaymentGatewayManager',
          'ordernumbergenerator' => 'App\\Services\\OrderNumberGenerator',
          'pricingservice' => 'App\\Services\\PricingService',
          'db' => 'Illuminate\\Support\\Facades\\DB',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Actions\\Checkout\\PlaceOrderAction',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'e2efd9fed409eadcb6fa2d8937ac0499' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Actions\\Checkout',
         'uses' => 
        array (
          'validatecouponaction' => 'App\\Actions\\Marketing\\ValidateCouponAction',
          'orderstatus' => 'App\\Enums\\OrderStatus',
          'paymentmethod' => 'App\\Enums\\PaymentMethod',
          'paymentstatus' => 'App\\Enums\\PaymentStatus',
          'productstatus' => 'App\\Enums\\ProductStatus',
          'orderplaced' => 'App\\Events\\OrderPlaced',
          'cart' => 'App\\Models\\Cart',
          'inventoryitem' => 'App\\Models\\InventoryItem',
          'order' => 'App\\Models\\Order',
          'user' => 'App\\Models\\User',
          'paymentgatewaymanager' => 'App\\Payments\\PaymentGatewayManager',
          'ordernumbergenerator' => 'App\\Services\\OrderNumberGenerator',
          'pricingservice' => 'App\\Services\\PricingService',
          'db' => 'Illuminate\\Support\\Facades\\DB',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Actions\\Checkout\\PlaceOrderAction',
         'functionName' => '__construct',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '907200954ad97647087a0f1538b91795' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Actions\\Checkout',
         'uses' => 
        array (
          'validatecouponaction' => 'App\\Actions\\Marketing\\ValidateCouponAction',
          'orderstatus' => 'App\\Enums\\OrderStatus',
          'paymentmethod' => 'App\\Enums\\PaymentMethod',
          'paymentstatus' => 'App\\Enums\\PaymentStatus',
          'productstatus' => 'App\\Enums\\ProductStatus',
          'orderplaced' => 'App\\Events\\OrderPlaced',
          'cart' => 'App\\Models\\Cart',
          'inventoryitem' => 'App\\Models\\InventoryItem',
          'order' => 'App\\Models\\Order',
          'user' => 'App\\Models\\User',
          'paymentgatewaymanager' => 'App\\Payments\\PaymentGatewayManager',
          'ordernumbergenerator' => 'App\\Services\\OrderNumberGenerator',
          'pricingservice' => 'App\\Services\\PricingService',
          'db' => 'Illuminate\\Support\\Facades\\DB',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Actions\\Checkout\\PlaceOrderAction',
         'functionName' => 'handle',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '2d32f3cd52e2dc5c1cfa0437e0202f6d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Actions\\Checkout',
         'uses' => 
        array (
          'validatecouponaction' => 'App\\Actions\\Marketing\\ValidateCouponAction',
          'orderstatus' => 'App\\Enums\\OrderStatus',
          'paymentmethod' => 'App\\Enums\\PaymentMethod',
          'paymentstatus' => 'App\\Enums\\PaymentStatus',
          'productstatus' => 'App\\Enums\\ProductStatus',
          'orderplaced' => 'App\\Events\\OrderPlaced',
          'cart' => 'App\\Models\\Cart',
          'inventoryitem' => 'App\\Models\\InventoryItem',
          'order' => 'App\\Models\\Order',
          'user' => 'App\\Models\\User',
          'paymentgatewaymanager' => 'App\\Payments\\PaymentGatewayManager',
          'ordernumbergenerator' => 'App\\Services\\OrderNumberGenerator',
          'pricingservice' => 'App\\Services\\PricingService',
          'db' => 'Illuminate\\Support\\Facades\\DB',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Actions\\Checkout\\PlaceOrderAction',
         'functionName' => 'decrementStock',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
    ),
    1 => 
    array (
      '/var/www/html/app/Actions/Checkout/PlaceOrderAction.php' => '0d206b923c965d6093533b89f8f098b56b4d6e8ddd7d5f0888826a5afd6f539a',
    ),
  ),
));