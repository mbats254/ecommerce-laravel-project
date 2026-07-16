<?php declare(strict_types = 1);

// odsl-C:\Users\Afya\Documents\Personal\Anchor\anchor-api\app\Console\Commands\GenerateAiInsightsCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\GenerateAiInsightsCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.18-9117fa77cbc5114ffdace00ba125a4aaf8f38153e6de87c5a79e3d43edc75e96',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'filename' => 'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/app/Console/Commands/GenerateAiInsightsCommand.php',
      ),
    ),
    'namespace' => 'App\\Console\\Commands',
    'name' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
    'shortName' => 'GenerateAiInsightsCommand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Rule-based for now — an LLM call could replace the analysis later without
 * touching request latency, since this only ever writes rows the
 * GET /admin/ai-insights endpoint reads (see implementation plan §3.5).
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 129,
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
        'declaringClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'implementingClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'app:generate-ai-insights\'',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 62,
            'startFilePos' => 627,
            'endTokenPos' => 62,
            'endFilePos' => 652,
          ),
        ),
        'docComment' => '/**
 * The name and signature of the console command.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 54,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'description' => 
      array (
        'declaringClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'implementingClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'name' => 'description',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Analyze recent orders and stock levels, writing rule-based insights to ai_insights.\'',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 73,
            'startFilePos' => 767,
            'endTokenPos' => 73,
            'endFilePos' => 851,
          ),
        ),
        'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 115,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the console command.
 */',
        'startLine' => 37,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'implementingClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'currentClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'aliasName' => NULL,
      ),
      'reportLowStock' => 
      array (
        'name' => 'reportLowStock',
        'parameters' => 
        array (
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
        'startLine' => 44,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'implementingClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'currentClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'aliasName' => NULL,
      ),
      'reportSalesTrend' => 
      array (
        'name' => 'reportSalesTrend',
        'parameters' => 
        array (
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
        'startLine' => 73,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'implementingClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'currentClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'aliasName' => NULL,
      ),
      'reportTopProduct' => 
      array (
        'name' => 'reportTopProduct',
        'parameters' => 
        array (
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
        'startLine' => 101,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'implementingClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'currentClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'aliasName' => NULL,
      ),
      'absPercent' => 
      array (
        'name' => 'absPercent',
        'parameters' => 
        array (
          'percent' => 
          array (
            'name' => 'percent',
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
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 33,
            'endColumn' => 46,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 125,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'implementingClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
        'currentClassName' => 'App\\Console\\Commands\\GenerateAiInsightsCommand',
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