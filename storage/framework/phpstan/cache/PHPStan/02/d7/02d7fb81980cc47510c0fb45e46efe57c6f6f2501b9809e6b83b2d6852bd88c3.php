<?php declare(strict_types = 1);

// osfsl-C:/Users/Afya/Documents/Personal/Anchor/anchor-api/vendor/composer/../laravel/scout/src/Builder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Scout\Builder
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1c05afb3953990c969f733b525a004b60ffe9db2b46d0027d8f5fa208253e4de-8.4.18-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Scout\\Builder',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/vendor/composer/../laravel/scout/src/Builder.php',
      ),
    ),
    'namespace' => 'Laravel\\Scout',
    'name' => 'Laravel\\Scout\\Builder',
    'shortName' => 'Builder',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @template TModel of \\Illuminate\\Database\\Eloquent\\Model
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 603,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Conditionable',
      1 => 'Illuminate\\Support\\Traits\\Macroable',
      2 => 'Illuminate\\Support\\Traits\\Tappable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'model' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'model',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The model instance.
 *
 * @var TModel
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'query' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'query',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The query expression.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'callback' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'callback',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Optional callback before search execution.
 *
 * @var \\Closure|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queryCallback' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'queryCallback',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Optional callback before model query execution.
 *
 * @var \\Closure|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterRawSearchCallback' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'afterRawSearchCallback',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Optional callback after raw search.
 *
 * @var \\Closure|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'index' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'index',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom index specified for the search.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'wheres' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'wheres',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 121,
            'startFilePos' => 1365,
            'endTokenPos' => 122,
            'endFilePos' => 1366,
          ),
        ),
        'docComment' => '/**
 * The "where" constraints added to the query.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'whereIns' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'whereIns',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 76,
            'endLine' => 76,
            'startTokenPos' => 133,
            'startFilePos' => 1488,
            'endTokenPos' => 134,
            'endFilePos' => 1489,
          ),
        ),
        'docComment' => '/**
 * The "where in" constraints added to the query.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'whereNotIns' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'whereNotIns',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 83,
            'endLine' => 83,
            'startTokenPos' => 145,
            'startFilePos' => 1618,
            'endTokenPos' => 146,
            'endFilePos' => 1619,
          ),
        ),
        'docComment' => '/**
 * The "where not in" constraints added to the query.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'limit' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'limit',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The "limit" that should be applied to the search.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'orders' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'orders',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 97,
            'endLine' => 97,
            'startTokenPos' => 164,
            'startFilePos' => 1863,
            'endTokenPos' => 165,
            'endFilePos' => 1864,
          ),
        ),
        'docComment' => '/**
 * The "order" that should be applied to the search.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'options' => 
      array (
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'name' => 'options',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 104,
            'endLine' => 104,
            'startTokenPos' => 176,
            'startFilePos' => 1990,
            'endTokenPos' => 177,
            'endFilePos' => 1991,
          ),
        ),
        'docComment' => '/**
 * Extra options that should be applied to the search.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 25,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 115,
                'endLine' => 115,
                'startTokenPos' => 198,
                'startFilePos' => 2276,
                'endTokenPos' => 198,
                'endFilePos' => 2279,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 49,
            'endColumn' => 64,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'softDelete' => 
          array (
            'name' => 'softDelete',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 115,
                'endLine' => 115,
                'startTokenPos' => 205,
                'startFilePos' => 2296,
                'endTokenPos' => 205,
                'endFilePos' => 2300,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 67,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new search builder instance.
 *
 * @param  TModel  $model
 * @param  string  $query
 * @param  \\Closure|null  $callback
 * @param  bool  $softDelete
 * @return void
 */',
        'startLine' => 115,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'within' => 
      array (
        'name' => 'within',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Specify a custom index to perform this search on.
 *
 * @param  string  $index
 * @return $this
 */',
        'startLine' => 136,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'where' => 
      array (
        'name' => 'where',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 35,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 151,
                'endLine' => 151,
                'startTokenPos' => 330,
                'startFilePos' => 3082,
                'endTokenPos' => 330,
                'endFilePos' => 3085,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 46,
            'endColumn' => 58,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a constraint to the search query.
 *
 * @param  string  $field
 * @param  mixed  $operator
 * @param  mixed|null  $value
 * @return $this
 */',
        'startLine' => 151,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'whereIn' => 
      array (
        'name' => 'whereIn',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 169,
            'endLine' => 169,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 169,
            'endLine' => 169,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where in" constraint to the search query.
 *
 * @param  string  $field
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @return $this
 */',
        'startLine' => 169,
        'endLine' => 178,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotIn' => 
      array (
        'name' => 'whereNotIn',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 187,
            'endLine' => 187,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 187,
            'endLine' => 187,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not in" constraint to the search query.
 *
 * @param  string  $field
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @return $this
 */',
        'startLine' => 187,
        'endLine' => 196,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'withTrashed' => 
      array (
        'name' => 'withTrashed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Include soft deleted records in the results.
 *
 * @return $this
 */',
        'startLine' => 203,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'onlyTrashed' => 
      array (
        'name' => 'onlyTrashed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Include only soft deleted records in the results.
 *
 * @return $this
 */',
        'startLine' => 215,
        'endLine' => 224,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'take' => 
      array (
        'name' => 'take',
        'parameters' => 
        array (
          'limit' => 
          array (
            'name' => 'limit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 232,
            'endLine' => 232,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the "limit" for the search query.
 *
 * @param  int  $limit
 * @return $this
 */',
        'startLine' => 232,
        'endLine' => 237,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'orderBy' => 
      array (
        'name' => 'orderBy',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 246,
            'endLine' => 246,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'direction' => 
          array (
            'name' => 'direction',
            'default' => 
            array (
              'code' => '\'asc\'',
              'attributes' => 
              array (
                'startLine' => 246,
                'endLine' => 246,
                'startTokenPos' => 690,
                'startFilePos' => 5242,
                'endTokenPos' => 690,
                'endFilePos' => 5246,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 246,
            'endLine' => 246,
            'startColumn' => 38,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "order" for the search query.
 *
 * @param  string  $column
 * @param  string  $direction
 * @return $this
 */',
        'startLine' => 246,
        'endLine' => 254,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'orderByDesc' => 
      array (
        'name' => 'orderByDesc',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 262,
            'endLine' => 262,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a descending "order by" clause to the search query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 262,
        'endLine' => 265,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'latest' => 
      array (
        'name' => 'latest',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 273,
                'endLine' => 273,
                'startTokenPos' => 784,
                'startFilePos' => 5848,
                'endTokenPos' => 784,
                'endFilePos' => 5851,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 28,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 273,
        'endLine' => 280,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'oldest' => 
      array (
        'name' => 'oldest',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 288,
                'endLine' => 288,
                'startTokenPos' => 846,
                'startFilePos' => 6206,
                'endTokenPos' => 846,
                'endFilePos' => 6209,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 288,
            'endLine' => 288,
            'startColumn' => 28,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 288,
        'endLine' => 295,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'options' => 
      array (
        'name' => 'options',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 303,
            'endLine' => 303,
            'startColumn' => 29,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set extra options for the search query.
 *
 * @param  array  $options
 * @return $this
 */',
        'startLine' => 303,
        'endLine' => 308,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'query' => 
      array (
        'name' => 'query',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 316,
            'endLine' => 316,
            'startColumn' => 27,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the callback that should have an opportunity to modify the database query.
 *
 * @param  callable  $callback
 * @return $this
 */',
        'startLine' => 316,
        'endLine' => 321,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'raw' => 
      array (
        'name' => 'raw',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the raw results of the search.
 *
 * @return mixed
 */',
        'startLine' => 328,
        'endLine' => 331,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'withRawResults' => 
      array (
        'name' => 'withRawResults',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 339,
            'endLine' => 339,
            'startColumn' => 36,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the callback that should have an opportunity to inspect and modify the raw result returned by the search engine.
 *
 * @param  callable  $callback
 * @return $this
 */',
        'startLine' => 339,
        'endLine' => 344,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'keys' => 
      array (
        'name' => 'keys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the keys of search results.
 *
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 351,
        'endLine' => 354,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'first' => 
      array (
        'name' => 'first',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the first result from the search.
 *
 * @return TModel
 */',
        'startLine' => 361,
        'endLine' => 364,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the results of the search.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TModel>
 */',
        'startLine' => 371,
        'endLine' => 374,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'cursor' => 
      array (
        'name' => 'cursor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the results of the search as a "lazy collection" instance.
 *
 * @return \\Illuminate\\Support\\LazyCollection<int, TModel>
 */',
        'startLine' => 381,
        'endLine' => 384,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'simplePaginate' => 
      array (
        'name' => 'simplePaginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 394,
                'endLine' => 394,
                'startTokenPos' => 1136,
                'startFilePos' => 8511,
                'endTokenPos' => 1136,
                'endFilePos' => 8514,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 36,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'pageName' => 
          array (
            'name' => 'pageName',
            'default' => 
            array (
              'code' => '\'page\'',
              'attributes' => 
              array (
                'startLine' => 394,
                'endLine' => 394,
                'startTokenPos' => 1143,
                'startFilePos' => 8529,
                'endTokenPos' => 1143,
                'endFilePos' => 8534,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 53,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 394,
                'endLine' => 394,
                'startTokenPos' => 1150,
                'startFilePos' => 8545,
                'endTokenPos' => 1150,
                'endFilePos' => 8548,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 73,
            'endColumn' => 84,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Paginate the given query into a simple paginator.
 *
 * @param  int  $perPage
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \\Illuminate\\Contracts\\Pagination\\Paginator
 */',
        'startLine' => 394,
        'endLine' => 425,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'simplePaginateRaw' => 
      array (
        'name' => 'simplePaginateRaw',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 435,
                'endLine' => 435,
                'startTokenPos' => 1457,
                'startFilePos' => 10092,
                'endTokenPos' => 1457,
                'endFilePos' => 10095,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 435,
            'endLine' => 435,
            'startColumn' => 39,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'pageName' => 
          array (
            'name' => 'pageName',
            'default' => 
            array (
              'code' => '\'page\'',
              'attributes' => 
              array (
                'startLine' => 435,
                'endLine' => 435,
                'startTokenPos' => 1464,
                'startFilePos' => 10110,
                'endTokenPos' => 1464,
                'endFilePos' => 10115,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 435,
            'endLine' => 435,
            'startColumn' => 56,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 435,
                'endLine' => 435,
                'startTokenPos' => 1471,
                'startFilePos' => 10126,
                'endTokenPos' => 1471,
                'endFilePos' => 10129,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 435,
            'endLine' => 435,
            'startColumn' => 76,
            'endColumn' => 87,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Paginate the given query into a simple paginator with raw data.
 *
 * @param  int  $perPage
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \\Illuminate\\Contracts\\Pagination\\Paginator
 */',
        'startLine' => 435,
        'endLine' => 462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'paginate' => 
      array (
        'name' => 'paginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 472,
                'endLine' => 472,
                'startTokenPos' => 1748,
                'startFilePos' => 11520,
                'endTokenPos' => 1748,
                'endFilePos' => 11523,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 472,
            'endLine' => 472,
            'startColumn' => 30,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'pageName' => 
          array (
            'name' => 'pageName',
            'default' => 
            array (
              'code' => '\'page\'',
              'attributes' => 
              array (
                'startLine' => 472,
                'endLine' => 472,
                'startTokenPos' => 1755,
                'startFilePos' => 11538,
                'endTokenPos' => 1755,
                'endFilePos' => 11543,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 472,
            'endLine' => 472,
            'startColumn' => 47,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 472,
                'endLine' => 472,
                'startTokenPos' => 1762,
                'startFilePos' => 11554,
                'endTokenPos' => 1762,
                'endFilePos' => 11557,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 472,
            'endLine' => 472,
            'startColumn' => 67,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Paginate the given query into a paginator.
 *
 * @param  int  $perPage
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \\Illuminate\\Contracts\\Pagination\\LengthAwarePaginator
 */',
        'startLine' => 472,
        'endLine' => 502,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'paginateRaw' => 
      array (
        'name' => 'paginateRaw',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 512,
                'endLine' => 512,
                'startTokenPos' => 2054,
                'startFilePos' => 13046,
                'endTokenPos' => 2054,
                'endFilePos' => 13049,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 512,
            'endLine' => 512,
            'startColumn' => 33,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'pageName' => 
          array (
            'name' => 'pageName',
            'default' => 
            array (
              'code' => '\'page\'',
              'attributes' => 
              array (
                'startLine' => 512,
                'endLine' => 512,
                'startTokenPos' => 2061,
                'startFilePos' => 13064,
                'endTokenPos' => 2061,
                'endFilePos' => 13069,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 512,
            'endLine' => 512,
            'startColumn' => 50,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 512,
                'endLine' => 512,
                'startTokenPos' => 2068,
                'startFilePos' => 13080,
                'endTokenPos' => 2068,
                'endFilePos' => 13083,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 512,
            'endLine' => 512,
            'startColumn' => 70,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Paginate the given query into a paginator with raw data.
 *
 * @param  int  $perPage
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \\Illuminate\\Contracts\\Pagination\\LengthAwarePaginator
 */',
        'startLine' => 512,
        'endLine' => 538,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'getTotalCount' => 
      array (
        'name' => 'getTotalCount',
        'parameters' => 
        array (
          'results' => 
          array (
            'name' => 'results',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 546,
            'endLine' => 546,
            'startColumn' => 38,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the total number of results from the Scout engine, or fallback to query builder.
 *
 * @param  mixed  $results
 * @return int
 */',
        'startLine' => 546,
        'endLine' => 569,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'applyAfterRawSearchCallback' => 
      array (
        'name' => 'applyAfterRawSearchCallback',
        'parameters' => 
        array (
          'results' => 
          array (
            'name' => 'results',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 577,
            'endLine' => 577,
            'startColumn' => 49,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Invoke the "after raw search" callback.
 *
 * @param  mixed  $results
 * @return mixed
 */',
        'startLine' => 577,
        'endLine' => 584,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'engine' => 
      array (
        'name' => 'engine',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the engine that should handle the query.
 *
 * @return mixed
 */',
        'startLine' => 591,
        'endLine' => 594,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
        'aliasName' => NULL,
      ),
      'modelConnectionType' => 
      array (
        'name' => 'modelConnectionType',
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
        'docComment' => '/**
 * Get the connection type for the underlying model.
 */',
        'startLine' => 599,
        'endLine' => 602,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Scout',
        'declaringClassName' => 'Laravel\\Scout\\Builder',
        'implementingClassName' => 'Laravel\\Scout\\Builder',
        'currentClassName' => 'Laravel\\Scout\\Builder',
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