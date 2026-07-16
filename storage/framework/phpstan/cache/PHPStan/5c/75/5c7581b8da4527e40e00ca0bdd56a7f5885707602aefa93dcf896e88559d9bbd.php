<?php declare(strict_types = 1);

// odsl-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\app\Actions\Marketing\ValidateCouponAction.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Actions\Marketing\ValidateCouponAction
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.18-7f459b7cb074a8c6ee4ef71e35ed74ee4ff8375bf23e1fef0201625f0c1a4378',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Actions\\Marketing\\ValidateCouponAction',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/app/Actions/Marketing/ValidateCouponAction.php',
      ),
    ),
    'namespace' => 'App\\Actions\\Marketing',
    'name' => 'App\\Actions\\Marketing\\ValidateCouponAction',
    'shortName' => 'ValidateCouponAction',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * The single place a coupon is checked and priced. Reused verbatim by the
 * storefront\'s /coupons/validate preview and by PlaceOrderAction at
 * checkout — one implementation, two call sites, impossible to disagree.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 53,
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
          'code' => 
          array (
            'name' => 'code',
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
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'cartTotal' => 
          array (
            'name' => 'cartTotal',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'float',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 42,
            'endColumn' => 57,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array{coupon: Coupon, discount: float}
 */',
        'startLine' => 19,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Actions\\Marketing',
        'declaringClassName' => 'App\\Actions\\Marketing\\ValidateCouponAction',
        'implementingClassName' => 'App\\Actions\\Marketing\\ValidateCouponAction',
        'currentClassName' => 'App\\Actions\\Marketing\\ValidateCouponAction',
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