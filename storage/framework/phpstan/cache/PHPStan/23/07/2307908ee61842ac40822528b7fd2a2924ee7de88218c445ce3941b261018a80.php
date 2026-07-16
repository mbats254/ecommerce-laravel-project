<?php declare(strict_types = 1);

// ftm-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\app\Actions\Checkout\PlaceOrderAction.php
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v5-2.3.2',
   'data' => 
  array (
    0 => 
    array (
      'bcefab953e552dbc84618209109a4fc2' => 
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
      'c52068a5978286a8d87d0f389b804502' => 
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
      '544231e270eea2f5967f80a6c35996d9' => 
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
      'd72d2def45279633daa78ae4ca46cbab' => 
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
      'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Checkout\\PlaceOrderAction.php' => '0d206b923c965d6093533b89f8f098b56b4d6e8ddd7d5f0888826a5afd6f539a',
    ),
  ),
));