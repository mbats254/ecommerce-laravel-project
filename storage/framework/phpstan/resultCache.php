<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1784149191,
	'meta' => array (
  'cacheVersion' => 'v13-packageDependencies',
  'phpstanVersion' => '2.2.5',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80418,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: true, enableMigrationCache: false, paths: [C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app, C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database, C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes], level: 6, tmpDir: C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\storage\\framework\\phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ContractsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\FacadesMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ManagersMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\AuthsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentCollectionMapDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app',
    1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database',
    2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/composer.lock' => '91c7855396ea8f557b12aa5d4c99b69b81b0282cb5b9b593dc1e021852d61f06',
  ),
  'composerInstalled' => 
  array (
    'C:/Users/Afya/Documents/Personal/Anchor/anchor-api/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.8.5',
          'version' => '7.8.5.0',
          'reference' => '9b324c8fc319cf9728b581c7a90e1c8f6361c5e5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.14.2',
          'version' => '7.14.2.0',
          'reference' => 'fa88c57803501ad0770f5cddb1e60525d49da9a1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.5.1',
          'version' => '2.5.1.0',
          'reference' => '9ad1e4fc607446a055b95870c7f668e93b5cff29',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.12.5',
          'version' => '2.12.5.0',
          'reference' => '9365d578a9fd1552ad6ca9c3cb530708526feb09',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.9',
          'version' => '1.0.9.0',
          'reference' => 'd7580af6d3f8384325d9cd3e99b21c3ed1848176',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.10.0',
          'version' => '3.10.0.0',
          'reference' => '2970f83398154178a739609c244577267c7ee8eb',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.64.0',
          'version' => '12.64.0.0',
          'reference' => '727a8ea2949c23ca8b5316b86a00984b6017b7a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/horizon' => 
        array (
          'pretty_version' => 'v5.47.2',
          'version' => '5.47.2.0',
          'reference' => 'a6ac142293ad02db4d7cccb961dd32f56ef1462d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/horizon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.7',
          'version' => '1.2.7.0',
          'reference' => '2f7d27dada8effc48b8c424445a69cca7007daaa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.29.3',
          'version' => '1.29.3.0',
          'reference' => 'da1d1111a6aa2e082d2a388b194afe1ba0a05d14',
          'type' => 'project',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.21',
          'version' => '0.3.21.0',
          'reference' => '7753c65c281c2550c7c183f14e18062073b7d821',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.63.0',
          'version' => '1.63.0.0',
          'reference' => '51bbce3f803c1d386cabbb44e618c955a12ff5fc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v4.3.2',
          'version' => '4.3.2.0',
          'reference' => '2a9bccc18e9907808e0018dd15fa643937886b1e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/scout' => 
        array (
          'pretty_version' => 'v11.3.0',
          'version' => '11.3.0.0',
          'reference' => '7d0903e083dee7c3d295a27917c82496c5c41970',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/scout',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sentinel' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => '972d9885d9d14312a118e9565c4e6ecc5e751ea1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/sentinel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.13',
          'version' => '2.0.13.0',
          'reference' => 'b566ee0dd251f3c4078bed003a7ce015f5ea6dce',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/telescope' => 
        array (
          'pretty_version' => 'v5.20.0',
          'version' => '5.20.0.0',
          'reference' => '38ec6e6006a67e05e0c476c5f8ef3550b72e43d8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/telescope',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.11.1',
          'version' => '2.11.1.0',
          'reference' => 'c9f80cc835649b5c1842898fb043f8cc098dd741',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.3',
          'version' => '2.8.3.0',
          'reference' => '1902f60f984235023acbe03db6ad614a37b3c3e7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.35.2',
          'version' => '3.35.2.0',
          'reference' => 'b277b5dc3d56650b68904117124e79c851e12376',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.17.0',
          'version' => '1.17.0.0',
          'reference' => 'f5f47eff7c48ed1003069a2ca67f316fb4021c76',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '08cf38e3924d4f56238125547b5720496fac8fd4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '85d5c77c5d6d3af6c54db4a78246364908f3c928',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'meilisearch/meilisearch-php' => 
        array (
          'pretty_version' => 'v1.16.1',
          'version' => '1.16.1.0',
          'reference' => 'f9f63e0e7d12ffaae54f7317fa8f4f4dfa8ae7b6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../meilisearch/meilisearch-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.13.1',
          'version' => '3.13.1.0',
          'reference' => '2937ad3d1d2c506fd2bc97d571438a95641f44e2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.4',
          'version' => '4.1.4.0',
          'reference' => '7da6c396d7ebe142bc857c20479d5e70a5e1aac7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.8.0',
          'version' => '5.8.0.0',
          'reference' => '044a6a392ff8ad0d61f14370a5fbbd0a0107152f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.4',
          'version' => '8.9.4.0',
          'reference' => '716af8f95a470e9094cfca09ed897b023be191a5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v3.8.7',
          'version' => '3.8.7.0',
          'reference' => 'f108313b52e8c28dc7121ce34303f817a3790202',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'e79b26c65bc11c41093b10150c1341cc5cdbea83',
          'type' => 'composer-plugin',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'reference' => 'db7bd9cb1612b223e16618d85475c6f63b9c8daa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '6801be82fd92b96e82dd72e563e5674b1ce365fc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v3.0.5',
          'version' => '3.0.5.0',
          'reference' => 'e10dbdc98c9e2f3890095b4fe2144f63a5717e08',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/async-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
          ),
        ),
        'php-http/client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
          ),
        ),
        'php-http/discovery' => 
        array (
          'pretty_version' => '1.20.0',
          'version' => '1.20.0.0',
          'reference' => '82fe4c73ef3363caed49ff8dd1539ba06044910d',
          'type' => 'composer-plugin',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../php-http/discovery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => '7bae67520aa9f5ecc506d646810bd40d9da54582',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '327a05bbee54120d4786a0dc67aad30226ad4cf9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.3',
          'version' => '2.3.3.0',
          'reference' => 'fb19eedd2bb67ff8cf7a5502ad329e701d6398a3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.2.5',
          'version' => '2.2.5.0',
          'reference' => '909c1e5fef7989ac0d0c1c5c42e32a5c4f6198a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.12',
          'version' => '11.0.12.0',
          'reference' => '2c1ed04922802c15e1de5d7447b4856de949cf56',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => '2f3a64888c814fc235386b7387dd5b5ed92ad903',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.56',
          'version' => '11.5.56.0',
          'reference' => '5f83edffa6967c3db468d48a695ec7bcb02e9256',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
            1 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
            1 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
            1 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.24',
          'version' => '0.12.24.0',
          'reference' => 'ca0fdcf8a7617afa3adfdf1b5fef573dffb69ca1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.3',
          'version' => '4.9.3.0',
          'reference' => '1df15849d00943a67d677dc9cfd80795f038c9f8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.3',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.3',
          'version' => '6.3.3.0',
          'reference' => '2c95e1e86cb8dd41beb8d502057d1081ccc8eca9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '70a298763b40b213ec087c51c739efcaa90bcd74',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.93.1',
          'version' => '1.93.1.0',
          'reference' => 'd5552849801f2642aea710557463234b59ef65eb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-permission' => 
        array (
          'pretty_version' => '8.3.0',
          'version' => '8.3.0.0',
          'reference' => '60e8ed5b2fbf043c2264433fc2680c76b8b66aa6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../spatie/laravel-permission',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-query-builder' => 
        array (
          'pretty_version' => '7.3.0',
          'version' => '7.3.0.0',
          'reference' => '3554c005f778d9da89d44b9895d2cca149110fea',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../spatie/laravel-query-builder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '701ef4de9705d6c32292ebee5e8044094a09fbf6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '92f58bc4bf97a92ed1b9f367f0cd44f20bde0e87',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'dc0e2be45c9b5588c82414f02ac574b4b986abcd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'f3202fa1b5097b0af062dc978b32ecf63404e31d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '4e1a093b481f323e6e326451f9760c3868430673',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => 'abd6c11dc468725d1627302ad10f6cd486e9e3d0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'c7de7a00ffb67842132da02ea92988a39ccd9f4e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '13b38720174286f55d1761152b575a8d1436fc25',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '06db5ae1552177bf8572f8908839f12e3c06aed3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => 'e99af79b1e776646eda0e1c23b7b45c184ff99be',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => 'f88ce03ae73e3edb5c176ce1f337709996e88495',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'a845722765c4f6b2ce88beaf4f4479975b186770',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '141046a8f9477948ff284fa65be2095baafb94f2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'e9247d281d694a5120554d9afaf54e070e88a603',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'dc21118016c039a66235cf93d96b435ffb282412',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => '2d446c214bdbe5b71bde5011b060a05fece3ae6b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.38.2',
          'version' => '1.38.2.0',
          'reference' => 'd3d318bad5e7a1bfbd026009c8bfb8d8f99ae6b6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'dfb55726c3a76ea3b6459fcfda1ec2d80a682411',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => '6bfb9c766cacffbc8e118cb87217d08ed84e5cd7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.38.2',
          'version' => '1.38.2.0',
          'reference' => '796a26abb75ce49f3a84433cd81bf1009d73d5f8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'f4e1dfaee5b74aba5964fe1fd4dfc7ba5e3085fa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'ba2ba04f3352cfa2dcbbcb90aee13ed967f505b1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '26dfec253c4cf3e51b541b52ddf7e42cb0908e94',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'f5804be144caceb570f6747519999636b664f24c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => '3a162171bb008e5e0f15dce6581373a4c0e8390d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'c0a284bab1ed8aa0417e3d69250ab437739563a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'afd5944f4005862d961efb85c8bbd5c523c4e3c9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => '342b4218630dc2cf284cedcb2080c80b13404014',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'ccb206b98faccc511ebae8e5fad50f2dc0b30621',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.9',
          'version' => '7.4.9.0',
          'reference' => '2676b524340abcfe4d6151ec698463cebafee439',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '9a3a56a4a1e65a5cb4f8d13801fe8ab0a170e358',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => '8e4cdd4311683516be06944f4b85244063cdb886',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.7',
          'version' => '0.8.7.0',
          'reference' => '1248f3f506ca9641d4f68cebcd538fa489754db8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.4',
          'version' => '5.6.4.0',
          'reference' => '416df702837983f8d5ff48c9c3fee4f5f57b980b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '8e1051fe39379367aecf014f41744ce7539a856f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '2.4.1',
          'version' => '2.4.1.0',
          'reference' => '2ccb7c2e821038c03a3e6e1700c570c158c55f70',
          'type' => 'library',
          'install_path' => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\larastan\\larastan\\bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'phar://C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar://C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar://C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar://C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dom',
    15 => 'exif',
    16 => 'fileinfo',
    17 => 'filter',
    18 => 'gd',
    19 => 'gmp',
    20 => 'hash',
    21 => 'herd',
    22 => 'iconv',
    23 => 'intl',
    24 => 'json',
    25 => 'libxml',
    26 => 'mbstring',
    27 => 'mongodb',
    28 => 'mysqli',
    29 => 'mysqlnd',
    30 => 'openssl',
    31 => 'pcre',
    32 => 'pdo_mysql',
    33 => 'pdo_pgsql',
    34 => 'pdo_sqlite',
    35 => 'pgsql',
    36 => 'random',
    37 => 'readline',
    38 => 'redis',
    39 => 'session',
    40 => 'shmop',
    41 => 'soap',
    42 => 'sockets',
    43 => 'sodium',
    44 => 'sqlite3',
    45 => 'standard',
    46 => 'tokenizer',
    47 => 'xml',
    48 => 'xmlreader',
    49 => 'xmlwriter',
    50 => 'zip',
    51 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '6',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\CreateAddressAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Actions\\Address\\CreateAddressAction',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\UpdateAddressAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Actions\\Address\\UpdateAddressAction',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\CreateAdminUserAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Password',
        1 => 'sendResetLink',
        2 => 30,
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\RegisterUserAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 23,
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\ResetPasswordAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 27,
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\SendPasswordResetLinkAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Password',
        1 => 'sendResetLink',
        2 => 17,
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateBrandAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Actions\\Catalog\\CreateBrandAction',
        1 => 'handle',
        2 => 'App\\Actions\\Catalog\\CreateBrandAction',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\builder' . "\0" . 'create',
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateCategoryAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Actions\\Catalog\\CreateCategoryAction',
        1 => 'handle',
        2 => 'App\\Actions\\Catalog\\CreateCategoryAction',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\builder' . "\0" . 'create',
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreBrandRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Admin\\StoreBrandRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Admin\\StoreBrandRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreCategoryRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Admin\\StoreCategoryRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Admin\\StoreCategoryRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreProductImageRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Admin\\StoreProductImageRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Admin\\StoreProductImageRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreProductRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Admin\\StoreProductRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Admin\\StoreProductRequest',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\validation\\rule' . "\0" . 'in',
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreRoleRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Admin\\StoreRoleRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Admin\\StoreRoleRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateAdminUserRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Admin\\UpdateAdminUserRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Admin\\UpdateAdminUserRequest',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\validation\\rule' . "\0" . 'in',
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateReviewRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Admin\\UpdateReviewRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Admin\\UpdateReviewRequest',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\validation\\rule' . "\0" . 'in',
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\ForgotPasswordRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\ForgotPasswordRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\Auth\\ForgotPasswordRequest',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\ForgotPasswordRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Auth\\ForgotPasswordRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\LoginRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\RegisterRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\RegisterRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\Auth\\RegisterRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\ResetPasswordRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\ResetPasswordRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\Auth\\ResetPasswordRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\StoreAddressRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreAddressRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreAddressRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\UpdateAddressRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateAddressRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\UpdateAddressRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\PermissionResource.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Resources\\Admin\\PermissionResource',
        1 => 'toArray',
        2 => 'App\\Http\\Resources\\Admin\\PermissionResource',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\BrandResource.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Resources\\BrandResource',
        1 => 'toArray',
        2 => 'App\\Http\\Resources\\BrandResource',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\PaginatedResourceCollection.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Resources\\PaginatedResourceCollection',
        1 => 'paginationInformation',
        2 => 'App\\Http\\Resources\\PaginatedResourceCollection',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductSpecificationResource.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Resources\\ProductSpecificationResource',
        1 => 'toArray',
        2 => 'App\\Http\\Resources\\ProductSpecificationResource',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Address.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Address',
        1 => 'casts',
        2 => 'App\\Models\\Address',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Brand.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Brand',
        1 => 'casts',
        2 => 'App\\Models\\Brand',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Category.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Category',
        1 => 'casts',
        2 => 'App\\Models\\Category',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\InventoryItem.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\InventoryItem',
        1 => 'casts',
        2 => 'App\\Models\\InventoryItem',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Product',
        1 => 'casts',
        2 => 'App\\Models\\Product',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Models\\Product',
        1 => 'stockStatus',
        2 => 'App\\Models\\Product',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\casts\\attribute' . "\0" . 'make',
        ),
      ),
      2 => 
      array (
        0 => 'App\\Models\\Product',
        1 => 'shouldBeSearchable',
        2 => 'App\\Models\\Product',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Laravel\\Scout\\Searchable',
        3 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductImage.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductSpecification.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductVariant.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\ProductVariant',
        1 => 'casts',
        2 => 'App\\Models\\ProductVariant',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Review.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Review',
        1 => 'casts',
        2 => 'App\\Models\\Review',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Spatie\\Permission\\Traits\\HasRoles',
        3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        4 => 'Illuminate\\Notifications\\Notifiable',
        5 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Warehouse.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Warehouse',
        1 => 'casts',
        2 => 'App\\Models\\Warehouse',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Notifications\\QueuedVerifyEmailNotification.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Bus\\Queueable',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Policies\\AddressPolicy.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Policies\\AddressPolicy',
        1 => 'view',
        2 => 'App\\Policies\\AddressPolicy',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Policies\\AddressPolicy',
        1 => 'create',
        2 => 'App\\Policies\\AddressPolicy',
        3 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 'App\\Policies\\AddressPolicy',
        1 => 'update',
        2 => 'App\\Policies\\AddressPolicy',
        3 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 'App\\Policies\\AddressPolicy',
        1 => 'delete',
        2 => 'App\\Policies\\AddressPolicy',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 34,
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\HorizonServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 30,
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\TelescopeServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Telescope\\Telescope',
        1 => 'filter',
        2 => 24,
      ),
      1 => 
      array (
        0 => 'Laravel\\Telescope\\Telescope',
        1 => 'hideRequestParameters',
        2 => 43,
      ),
      2 => 
      array (
        0 => 'Laravel\\Telescope\\Telescope',
        1 => 'hideRequestHeaders',
        2 => 45,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 59,
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_134224_create_permission_tables.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'throw_if',
        1 => 20,
      ),
      1 => 
      array (
        0 => 'throw_if',
        1 => 21,
      ),
      2 => 
      array (
        0 => 'throw_if',
        1 => 129,
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_134313_create_telescope_entries_table.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'AnonymousClass525b0a0adddd7f450fc7e20b79b6e22d',
        1 => 'getConnection',
        2 => 'Illuminate\\Database\\Migrations\\Migration@anonymous/database/migrations/2026_07_15_134313_create_telescope_entries_table.php:7',
        3 => 
        array (
          0 => 'f' . "\0" . 'config',
        ),
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\RolesAndPermissionsSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Spatie\\Permission\\Models\\Permission',
        1 => 'findOrCreate',
        2 => 39,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 28,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 29,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 40,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 41,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'patch',
        2 => 42,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'delete',
        2 => 43,
      ),
      6 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 46,
      ),
      7 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 47,
      ),
      8 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 49,
      ),
      9 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 50,
      ),
      10 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 52,
      ),
      11 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 53,
      ),
      12 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 54,
      ),
      13 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 56,
      ),
      14 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 57,
      ),
      15 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 60,
      ),
      16 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 61,
      ),
      17 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'put',
        2 => 62,
      ),
      18 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 64,
      ),
      19 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 65,
      ),
      20 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'put',
        2 => 66,
      ),
      21 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 68,
      ),
      22 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 69,
      ),
      23 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'put',
        2 => 70,
      ),
      24 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'delete',
        2 => 71,
      ),
      25 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 73,
      ),
      26 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 74,
      ),
      27 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'put',
        2 => 75,
      ),
      28 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'delete',
        2 => 76,
      ),
      29 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 78,
      ),
      30 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 79,
      ),
      31 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 80,
      ),
      32 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'put',
        2 => 81,
      ),
      33 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'delete',
        2 => 82,
      ),
      34 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 83,
      ),
      35 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 85,
      ),
      36 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'patch',
        2 => 86,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\CreateAddressAction.php' => 
  array (
    'fileHash' => '250abf479e47b17515288106d66932105095d409de9a747b30923f51d021868e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\SetDefaultAddressAction.php' => 
  array (
    'fileHash' => '1db07ffb7b859cfe290e5a72cffc0966165e6b9df9b1ceb2000d38333cc9d8d7',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\CreateAddressAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\UpdateAddressAction.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\UpdateAddressAction.php' => 
  array (
    'fileHash' => '8bf9f8d749227c37716c473857b7834272138f6bb8d7df945e17b78888889f00',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\CreateAdminUserAction.php' => 
  array (
    'fileHash' => '5893d1e4c0110f063c051aa425f1c6a6466eb47dc1cd674457a0c3744ca23a9a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\CreateRoleAction.php' => 
  array (
    'fileHash' => '415206a72f9194bfddfa05c176aa7e75816ce9f170a20784833e9ec470a7c8e9',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\UpdateAdminUserAction.php' => 
  array (
    'fileHash' => '06c88e63c28aaa6e047af78bee7f33da3492f1e29a000ad9d18590daa652ffde',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\UpdateRoleAction.php' => 
  array (
    'fileHash' => '605e78e89ce1d7c7c87fc0665ca5f09a55c7718e94998c411b6c897d28fe9917',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\LoginAction.php' => 
  array (
    'fileHash' => '6af25390583592e3295e322cc233cc671634f89b98c5e20579fc6c9ae55ea220',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\LogoutAction.php' => 
  array (
    'fileHash' => '94bf31773cdbe8cf90864c6c998560b30699e74b9ee2cc078fb1bbb0627fe956',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\RegisterUserAction.php' => 
  array (
    'fileHash' => 'bff22525b7866143d7f9bd1d5aa02edeeb99b160d85459c9da613227653839d6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\ResetPasswordAction.php' => 
  array (
    'fileHash' => 'd0e3f06916f95873526ff60b1631e7892c260337cff75473b3584ed407b56996',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\SendPasswordResetLinkAction.php' => 
  array (
    'fileHash' => 'c03f4e6171ccd668a6c0f5de4ff7386b0f536c2442b6fc8afe0c6d9bd73793df',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateBrandAction.php' => 
  array (
    'fileHash' => '7d8d1eff3573a43bfdea0f03493962f6ee2885f486c831128cb5243651fb06b0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\BrandController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateCategoryAction.php' => 
  array (
    'fileHash' => '8eed99be8ee8738050e2cce04632615585c5947777cb78b69325282ada924e19',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\CategoryController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateProductAction.php' => 
  array (
    'fileHash' => '4af4a06be50e15414419a870277e539739bf0dfcd3cfc0ef70d05a6cb6b021a9',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\ModerateReviewAction.php' => 
  array (
    'fileHash' => '2032b8ec13c6e1577851885461a951625b924eec27047117d3d98f0da522c6e5',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateBrandAction.php' => 
  array (
    'fileHash' => '3b25ab4f5b37d6c848ef0aadfb401533113f760e9b50e185a4f7cadae9af1571',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\BrandController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateCategoryAction.php' => 
  array (
    'fileHash' => '110a80103021355b33615e5a02fba7653c506657e009384deae556bb355adcec',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\CategoryController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateProductAction.php' => 
  array (
    'fileHash' => '725f882205111706bbc9793c1de5fbaed5551c2a8c4597712a45f2530f65a5ea',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UploadProductImageAction.php' => 
  array (
    'fileHash' => '4230df452c5bb82e9819cc0747c4e6caa01d6bfaab4ee400750b92b2d4b617ce',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\AdminUserStatus.php' => 
  array (
    'fileHash' => 'b845f755b723989c018fd0c3aa1065dc30f8bd52881a4fbe48883687ec170d25',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\CreateAdminUserAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserResource.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\User.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\UserFactory.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\0001_01_01_000000_create_users_table.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\ProductStatus.php' => 
  array (
    'fileHash' => '94a6b610c66a2910024a7368d0b3512273f2a7b4b5f566cf53516c2a1cfc99c9',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductFactory.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193936_create_products_table.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\ReviewStatus.php' => 
  array (
    'fileHash' => 'f3cfba2e273b896047e51afcfb35bb19507b0a9371be117bea3fb5b4446cddda',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\ModerateReviewAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewResource.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Review.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ReviewFactory.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_194014_create_reviews_table.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\StockStatus.php' => 
  array (
    'fileHash' => '2630608ba601aff1472abdc5c95a81c3cc500e614313c11917cfb0959785fb12',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateProductAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateProductAction.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UploadProductImageAction.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\FlashDealController.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\SearchController.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php',
      8 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewResource.php',
      9 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php',
      10 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Brand.php',
      11 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Category.php',
      12 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\InventoryItem.php',
      13 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
      14 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductImage.php',
      15 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductSpecification.php',
      16 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductVariant.php',
      17 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Review.php',
      18 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Services\\StockStatusResolver.php',
      19 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\InventoryItemFactory.php',
      20 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductImageFactory.php',
      21 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductSpecificationFactory.php',
      22 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductVariantFactory.php',
      23 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ReviewFactory.php',
      24 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php' => 
  array (
    'fileHash' => '0d142ad8055cbc4c06565b78b96db4252380456c7fefafaa7c70d09bce413af6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\BrandController.php' => 
  array (
    'fileHash' => '8a05929d26fe6b4f686bee82dad69fa1b994fdc03d9da5916894ccee4d137e67',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\CategoryController.php' => 
  array (
    'fileHash' => '9201515d96b7b54aa958777e8d6c5c0a23229a74e211d9dfacc4e6ef79169838',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php' => 
  array (
    'fileHash' => '85c42e0e523a207ea22b11c77606b36758e88ba5d16eda6b640a98e9af876ec3',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php' => 
  array (
    'fileHash' => 'e392b1f6e19b436d798ba284b192e37d33063759c13c220d783993727debd1ca',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php' => 
  array (
    'fileHash' => 'decb307b4df8c0c8a429d78b5019bb144466914fec058e064352ef95840ba9eb',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php' => 
  array (
    'fileHash' => 'd9f0b447bc15e803a8996c64f1201b0e4e8ce801bcb247d4680afb05ac298349',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php' => 
  array (
    'fileHash' => 'd42bbd1cd3ee780db5db4127a96dbee578c9aa4eedb911dbae656d6316951250',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\BrandController.php' => 
  array (
    'fileHash' => '5af163ec66f48d84698ea794f075adc0a5a279daf3e84f54720ec64d04a02416',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\CategoryController.php' => 
  array (
    'fileHash' => 'c123a0561c3e020d1c41f6c53ceb833a5367c599919992ff7cee284c8edcf7a2',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => 'e5ddafa07059bfc9f8310767b0fc04dd3b8a1f50bcec1fd693b19f5555697825',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\BrandController.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\CategoryController.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
      8 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\BrandController.php',
      9 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\CategoryController.php',
      10 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\FlashDealController.php',
      11 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php',
      12 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\SearchController.php',
      13 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\FlashDealController.php' => 
  array (
    'fileHash' => '475c9976a238b17e35a5f2cdf4bf8698f475d7af166df4dc9b73f654a3cf3bd7',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php' => 
  array (
    'fileHash' => 'f78b2876b7d4f50a4e64d9645ccb4eb53468a8500c9545ebedffbe72a5a23b68',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\SearchController.php' => 
  array (
    'fileHash' => '1fb52b7cac95bb0b7931650ebc09f29ae93635ac22d384f86e81b0d64904a402',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreAdminUserRequest.php' => 
  array (
    'fileHash' => '0b69d76a049bc0aeae81418b639a14268d1854eccbcf16e1eac5e60a4e099251',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreBrandRequest.php' => 
  array (
    'fileHash' => '3b0704996bbf7d8b957bd9409080ca41e2a6611ba065a9125f12d700f717d21e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\BrandController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreCategoryRequest.php' => 
  array (
    'fileHash' => '0837e5e3f8f53ee92058204d48dc3886a266aa13a759d394e68c242e586a32ab',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\CategoryController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreProductImageRequest.php' => 
  array (
    'fileHash' => '0d0669686702927d8ac61035757cc01bc038b1eecd0d7ebaaa8f1a485e5ab35e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreProductRequest.php' => 
  array (
    'fileHash' => 'be608c4b769a501a89f7ee4905f04ae15ced32c9d56c5205c2891fede3414623',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreRoleRequest.php' => 
  array (
    'fileHash' => '21c644941474961c22cdd86b08fcac25d006345ea39f0b01ddea435b80bd2920',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateAdminUserRequest.php' => 
  array (
    'fileHash' => '5aa18213371fd63682badff1aad6e70d531e8450e645ef0dffba3b27ac1ca943',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateBrandRequest.php' => 
  array (
    'fileHash' => 'd1907183a21cb82de596c78a7a6f391dae8a21432d83ada3ba9e284f0317b5b6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\BrandController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateCategoryRequest.php' => 
  array (
    'fileHash' => 'ddfd98f940e90fa05128e26d7c05a9c547458333df7c1f320b4422373fd37f91',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\CategoryController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateProductRequest.php' => 
  array (
    'fileHash' => '855c80d48f27275575af1c8a80bec5bbec462365eeaecb047f691c02943f6888',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateReviewRequest.php' => 
  array (
    'fileHash' => '0d3cab73a8b2357008d33afc304f544f3e612ae180b4719e42e205efb4029352',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateRoleRequest.php' => 
  array (
    'fileHash' => '11190efeb6dc495a780feaf0041e11d402ffd46b4fad5c7b5e1160293bd9a5bf',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\ForgotPasswordRequest.php' => 
  array (
    'fileHash' => '7c8e58a511e8ca2d1fea2067a527c76846660592131e6458ff971162469600d5',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\LoginRequest.php' => 
  array (
    'fileHash' => 'd3e88242bbf4e355787cb3d50f767553cc2ec129c2c25011077f1d8e9cf68f2e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\RegisterRequest.php' => 
  array (
    'fileHash' => '015bff99ab555cdc4bf40b308cf9ed23a8a589dd29d3e743103e706f082753c8',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\ResetPasswordRequest.php' => 
  array (
    'fileHash' => '04d295aa4d7f4786934249641d0465f930319656703201e6e2ee34289d458bf8',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\StoreAddressRequest.php' => 
  array (
    'fileHash' => '59e1ffa7848048f48a4e949243f20253c7de4076b518057f20bd42bf95c2c454',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\UpdateAddressRequest.php' => 
  array (
    'fileHash' => '22eab9b39354a53cebeef6fe2a158c39b110588d622c15a8840412e8a429568e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\AddressResource.php' => 
  array (
    'fileHash' => 'c91d8be5a1b536c4c2bfb86386487fc8372222f5f58732704676c4e0dc49759e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserCollection.php' => 
  array (
    'fileHash' => '7d1b9c9559d5492914819f39f2db4faf4e6c831074b2ce3b30ceaa4482970361',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserResource.php' => 
  array (
    'fileHash' => 'c0c9dc2aea6173779677efd91858971f3299e1fd19129bcff5a90263a08ec4e2',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserCollection.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\PermissionResource.php' => 
  array (
    'fileHash' => 'f0f88307b0eddbcb9f5d5f14ee646860749191b0b5f39f8a8e2cf81288a90160',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductCollection.php' => 
  array (
    'fileHash' => '5c47dd919216c60a18fbe505420d8e74125c4bff032885070bc8feecce667213',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php' => 
  array (
    'fileHash' => '8ddb732290704bd51b2ef9a87f8bc1f54ceec45e3f4b68e5de23966683597ec6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductCollection.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewCollection.php' => 
  array (
    'fileHash' => '52d28073054c7a51ed4fb11dd12ac463f832b3d1c1fb773f88dcc40f5e5955a0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewResource.php' => 
  array (
    'fileHash' => '68bf5a783e39b0f8b3866b7b13d441f20e696eb8a789fc231dc3daf441209ace',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewCollection.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\RoleCollection.php' => 
  array (
    'fileHash' => '51794f5127b50f6f23b93081f0ee17813605a5e152a7eb589ac8279b9435622f',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\RoleResource.php' => 
  array (
    'fileHash' => '4a075a1e1f150b21eebba20ef4ad4e267715dc6a3c746f9ae87fc07d2fa31e3f',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\RoleCollection.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\BrandResource.php' => 
  array (
    'fileHash' => '995b9f1d6bfdea4e03574b6bdf90244b46697f018a4a128d0e7d3a41bdd029b9',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\BrandController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\BrandController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\CategoryResource.php' => 
  array (
    'fileHash' => '8607178126869bbe24419156330a4ce0b9c223839f2a929a3914b3a26076bf8f',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\CategoryController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\CategoryController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\PaginatedResourceCollection.php' => 
  array (
    'fileHash' => '7aae322dfc58ccd3c54389fa312c611d39eb3246a40413fc411d1ed4236c5350',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserCollection.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductCollection.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewCollection.php',
      8 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\RoleCollection.php',
      9 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductCollection.php',
      10 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewCollection.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductCollection.php' => 
  array (
    'fileHash' => 'bf5184f210518c5590728324c5ce19b17a40f11cf075ed47d9fb7cc80cc80ca3',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductImageResource.php' => 
  array (
    'fileHash' => '2e4d71925774bb7c511bb00075ae7d031bd6c01cbda07fb15d641443af5b49ca',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php' => 
  array (
    'fileHash' => 'eb5be6e21ba3bc42c237e12c2bec15d25a2c35a28bc0556bbdd0cde39d8624fe',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\FlashDealController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\SearchController.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductCollection.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductSpecificationResource.php' => 
  array (
    'fileHash' => '505d783f71a4640005ab82a26fde6c24d9ab77b881556467d35a7acace9b9455',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewCollection.php' => 
  array (
    'fileHash' => '3219a97903191433c586dc49930af2b325de80c36af83eb1a8166da4b73b217a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewResource.php' => 
  array (
    'fileHash' => 'a4a8f698a4dd310311f88f105b6f112ec2b25b861142013110d66382e8278336',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewCollection.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\UserResource.php' => 
  array (
    'fileHash' => '97375b8734af5c75cfa4c3ea8149d026d661362832bac72a27b55a86e61e9da4',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Address.php' => 
  array (
    'fileHash' => '284cdc53d937e7322f42f227bac96a67c67761ebd94bf7007140d4a985cefa46',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\CreateAddressAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\SetDefaultAddressAction.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\UpdateAddressAction.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\StoreAddressRequest.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\AddressResource.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\User.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Policies\\AddressPolicy.php',
      8 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\AddressFactory.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Brand.php' => 
  array (
    'fileHash' => 'a596bd934c577a124f112826b6491aaf76dc25487eed7e4ded99ff71b517c08c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateBrandAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateBrandAction.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\BrandController.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\BrandController.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\BrandResource.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
      8 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\BrandFactory.php',
      9 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductFactory.php',
      10 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Category.php' => 
  array (
    'fileHash' => 'dbb101369b3d68b750ba6941564f1f3560d0c7fcd21c15d184b6eaa997cea77a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateCategoryAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateCategoryAction.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\CategoryController.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\CategoryController.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\CategoryResource.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
      8 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\CategoryFactory.php',
      9 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductFactory.php',
      10 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\InventoryItem.php' => 
  array (
    'fileHash' => '40cf5cb13adc88b9cc32aaa090a3bd83b5dc6c79e55655464a498dfa594374c5',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Warehouse.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Services\\StockStatusResolver.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\InventoryItemFactory.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php' => 
  array (
    'fileHash' => '3906109d026798d556cc8a86d9498b122ba19a829656631a95060320f3fb5661',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateProductAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateProductAction.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UploadProductImageAction.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\FlashDealController.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\SearchController.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductCollection.php',
      8 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php',
      9 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewResource.php',
      10 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductCollection.php',
      11 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php',
      12 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Brand.php',
      13 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Category.php',
      14 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\InventoryItem.php',
      15 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductImage.php',
      16 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductSpecification.php',
      17 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductVariant.php',
      18 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Review.php',
      19 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Services\\StockStatusResolver.php',
      20 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\InventoryItemFactory.php',
      21 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductFactory.php',
      22 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductImageFactory.php',
      23 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductSpecificationFactory.php',
      24 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductVariantFactory.php',
      25 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ReviewFactory.php',
      26 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductImage.php' => 
  array (
    'fileHash' => 'c50d462c055dfb1c863bc342707769260945036a9128c23e83ea412ce4d8b9aa',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UploadProductImageAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductImageResource.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductImageFactory.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductSpecification.php' => 
  array (
    'fileHash' => '2c3daaf3fafed00c80a93a67e4f2489f34badb30deeb0260fae90ff8f03db2a6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateProductAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateProductAction.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductSpecificationResource.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductSpecificationFactory.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductVariant.php' => 
  array (
    'fileHash' => '47f43009c28d9448dc69e538b8ef03e3ebb0a5349caa8dd801404451ce9dd25e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\InventoryItem.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductVariantFactory.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Review.php' => 
  array (
    'fileHash' => '7dce963ed382549e29d640a58206d7718145f9f0e4fd32cd04cc9ce5bad17337',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\ModerateReviewAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewCollection.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewResource.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewCollection.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewResource.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
      8 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ReviewFactory.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\User.php' => 
  array (
    'fileHash' => 'fc5cc079604ed47178240e370aa28bc3db603731fcb2b00f8f849da14c815387',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\CreateAddressAction.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\SetDefaultAddressAction.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\UpdateAddressAction.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\CreateAdminUserAction.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\UpdateAdminUserAction.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\LoginAction.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\RegisterUserAction.php',
      7 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\ResetPasswordAction.php',
      8 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php',
      9 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php',
      10 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php',
      11 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreAdminUserRequest.php',
      12 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreBrandRequest.php',
      13 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreCategoryRequest.php',
      14 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreProductImageRequest.php',
      15 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreProductRequest.php',
      16 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreRoleRequest.php',
      17 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateAdminUserRequest.php',
      18 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateBrandRequest.php',
      19 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateCategoryRequest.php',
      20 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateProductRequest.php',
      21 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateReviewRequest.php',
      22 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateRoleRequest.php',
      23 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\StoreAddressRequest.php',
      24 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\UpdateAddressRequest.php',
      25 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserCollection.php',
      26 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserResource.php',
      27 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewResource.php',
      28 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewResource.php',
      29 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\UserResource.php',
      30 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Address.php',
      31 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Review.php',
      32 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Policies\\AddressPolicy.php',
      33 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\TelescopeServiceProvider.php',
      34 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\AddressFactory.php',
      35 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ReviewFactory.php',
      36 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\UserFactory.php',
      37 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Warehouse.php' => 
  array (
    'fileHash' => '6088370ac2d8c8773d9ca3d83b528121330e0925ba383b6e333c03888b4631e9',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\InventoryItem.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\InventoryItemFactory.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\WarehouseFactory.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Notifications\\QueuedVerifyEmailNotification.php' => 
  array (
    'fileHash' => '6c27703bde8e23bb278a08482a39f12525b310305f1d0bc918a4eb77faeb9951',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\User.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Policies\\AddressPolicy.php' => 
  array (
    'fileHash' => '99c0a95a87a1191e7b3bd26276baab15cf1f555560eee1692c181a06e347fd68',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => 'fe3c028c63b68c7ee08c4f1ba985f5cfb711fcee44c6b6c9d389f00028af262b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\HorizonServiceProvider.php' => 
  array (
    'fileHash' => '2552d1f0844bf11e64ab6c68c357d71d32f980cadfdf2553c7727d563c3bfb77',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\TelescopeServiceProvider.php' => 
  array (
    'fileHash' => 'f971f43d0c4f2d12da208b2bf695b9ce527ccd8ad1e0cf57a8a359a8ccd6870f',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Services\\StockStatusResolver.php' => 
  array (
    'fileHash' => '20db964bd83edf5e701c997207a73933e700f36b850c58e8eb89b319a0e6b447',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Support\\FlatQueryFilters.php' => 
  array (
    'fileHash' => '05b276e451b78fa4d4003308e1c25d13f0f348ee7893a971181dede36f167607',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\AddressFactory.php' => 
  array (
    'fileHash' => 'a3005425a391c4c89e6bed8e9539fa6ab79141449ad6478bc719332d67127ccb',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Address.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\BrandFactory.php' => 
  array (
    'fileHash' => 'feba9b5a71f68899ca16876c6bb1d5179b70a06faad949550a99614c9bc54cfc',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Brand.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductFactory.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\CategoryFactory.php' => 
  array (
    'fileHash' => '7ea686237cef89ec626d4aae56c2d12e693a8789547bafa2fc81dad63d311d83',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Category.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductFactory.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\InventoryItemFactory.php' => 
  array (
    'fileHash' => '0d7963c78724f6fa5148ae1b71378028c13074ee7d37f40c5b43a70423716e1e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\InventoryItem.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductFactory.php' => 
  array (
    'fileHash' => 'a57df472211d483c65f3be7e1fae719f1bb803f4d82a28e803ad4a5e86e121c4',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\InventoryItemFactory.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductImageFactory.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductSpecificationFactory.php',
      4 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductVariantFactory.php',
      5 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ReviewFactory.php',
      6 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductImageFactory.php' => 
  array (
    'fileHash' => 'fdee4f04ce7982a7dddd20c8082d384d7c91e08a6bfc01ff610eaa2318a88efa',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductImage.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductSpecificationFactory.php' => 
  array (
    'fileHash' => '32f54e80652f96e9362050db69d298da05f382d73f75f9f8c2fa4c619adb3ba7',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductSpecification.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductVariantFactory.php' => 
  array (
    'fileHash' => '98b283c9936c1148e7a327df26d018f7b0b7ae101204b9969b2adbdca36705f0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductVariant.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ReviewFactory.php' => 
  array (
    'fileHash' => 'e25a0a24a1d65589070b58b5babb7da4babe5c12f9afa44a7ae0df46eec6d653',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Review.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\UserFactory.php' => 
  array (
    'fileHash' => 'd83339f1a1ddbfca8f741798f634ad11cb289695f20b9b7f118cdc62ebe17140',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\User.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\AddressFactory.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ReviewFactory.php',
      3 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\WarehouseFactory.php' => 
  array (
    'fileHash' => '561599dc1212da087e667d949a1384bdbef0be9b1d9d7760b59a024ef9e49d04',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Warehouse.php',
      1 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\InventoryItemFactory.php',
      2 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\0001_01_01_000000_create_users_table.php' => 
  array (
    'fileHash' => 'dfac7705ecec32b5bb26820d76d74d22b4f4e274a9de26314870647f5f7eb536',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\0001_01_01_000001_create_cache_table.php' => 
  array (
    'fileHash' => '2ca8398390ecef8eaf72aeac7fefce67f7de631b6f2ec7b7081c8db8953215dc',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\0001_01_01_000002_create_jobs_table.php' => 
  array (
    'fileHash' => '7c9c712adf4091c87bf2612f4d0dccdfa1df4501553e4ac068b83d7bd5462fa5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_132943_create_personal_access_tokens_table.php' => 
  array (
    'fileHash' => 'a0cd74a34b479c99601517c0260554627f2c6fec771e086cce97231414069221',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_134224_create_permission_tables.php' => 
  array (
    'fileHash' => '7793376ade0f8d148d0438a72cea110c8189a5c7913e219fe223eb0593d02fce',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_134313_create_telescope_entries_table.php' => 
  array (
    'fileHash' => 'afc2a0cd0aa4394578ef188cef6d5eab2ddebd18ccf07c28095ed4d1a49da475',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_170549_create_addresses_table.php' => 
  array (
    'fileHash' => '3fc61c0c7de2dedde1aac573a8eb3d8ab980a0cf9ddbd723a01af5e1fce01b2b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193923_create_categories_table.php' => 
  array (
    'fileHash' => '35d97986e788fbfcc3fb2931bdee3179aa9773da8d5da4e02730212c4f8981a2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193930_create_brands_table.php' => 
  array (
    'fileHash' => '5ed75e46f3173447c17a8e256eba2f7259707e9bd34840916f85cb822ce1f683',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193936_create_products_table.php' => 
  array (
    'fileHash' => '5becb90148a809e88dc0bfb530db7b715f646097f5db297b11af3a1af82bf311',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193942_create_product_images_table.php' => 
  array (
    'fileHash' => 'd8a11a5e6bb8eba6f3295c0d12e2621a5afac3252a23167419f7dcd0280aea74',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193959_create_product_specifications_table.php' => 
  array (
    'fileHash' => '06a0763125a62b7e651f22b72d6d26ffcc2f1effe3de07a6dc285c02053e0832',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_194005_create_product_variants_table.php' => 
  array (
    'fileHash' => 'b62dfb46418a9f21cd620071600b41d94c1665e6d5bd890108c1e5579d7340e5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_194014_create_reviews_table.php' => 
  array (
    'fileHash' => 'f52df06696bf45c511c0be201000a2bc5f386ae734c0fcce1d43fac325130842',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_194020_create_warehouses_table.php' => 
  array (
    'fileHash' => 'fcbb4f76133140a2fabdb73fc219c7b49dcbb4f191147db6b57c6a8e579dae8f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_194027_create_inventory_items_table.php' => 
  array (
    'fileHash' => '7654c730bfc353e197aea49fbd863f54121ce594a23d064b4198940ecbf0e078',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php' => 
  array (
    'fileHash' => '1ef9b3e84d53d3cf49834df383bc1e9011d14be204c172548e1fac9308a7ea2b',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    'fileHash' => '74e0fd66765c7d2855e4ab536589163627181d0e42e4837c971f33b61847928d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\RolesAndPermissionsSeeder.php' => 
  array (
    'fileHash' => '6a53d0febbb8b06b20079ebf326f7a2a34a5f446a5961ac70f0675a239210258',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php' => 
  array (
    'fileHash' => 'f177b1dfdfef71e0ca3f3ad4b8217bfe63abb07afe25cea0cfd43dc0ed1e44e5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\console.php' => 
  array (
    'fileHash' => '9adccc33e7dd400683e434774077c7fdb2f299c5712cedf16a43fdf56f2850fa',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\web.php' => 
  array (
    'fileHash' => '9e29fe47a46a9bfaa6d6896a47d5b4ebea79506ba85d2220ee4676eb91f888e7',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'packageDependencies' => array (
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\CreateRoleAction.php' => 
  array (
    0 => 'spatie/laravel-permission',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\RegisterUserAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateCategoryAction.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreProductRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateRoleRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\RegisterRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\UpdateAddressRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserCollection.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Brand.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Category.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\InventoryItem.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductImage.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Policies\\AddressPolicy.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/container',
    2 => 'laravel/telescope',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\BrandFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductSpecificationFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\api.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\UpdateAdminUserAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateProductAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\ModerateReviewAction.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateProductAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\ProductStatus.php' => 
  array (
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\SearchController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\LoginRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\StoreAddressRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\AddressResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
    4 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Services\\StockStatusResolver.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductImageFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_134224_create_permission_tables.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/simple-cache',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_134313_create_telescope_entries_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_170549_create_addresses_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193936_create_products_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_194014_create_reviews_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\web.php' => 
  array (
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\CreateAddressAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\UpdateAddressAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateBrandAction.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\ReviewStatus.php' => 
  array (
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\CategoryController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/scout',
    3 => 'spatie/laravel-query-builder',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreCategoryRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateAdminUserRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\ForgotPasswordRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductCollection.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductSpecificationResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ReviewFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'laravel/scout',
    3 => 'laravel/sanctum',
    4 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\WarehouseFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\0001_01_01_000000_create_users_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_132943_create_personal_access_tokens_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193930_create_brands_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_194027_create_inventory_items_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\RolesAndPermissionsSeeder.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\ResetPasswordAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\StockStatus.php' => 
  array (
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\BrandController.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\CategoryController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\FlashDealController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreRoleRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateReviewRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\PermissionResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-permission',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/scout',
    3 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\PaginatedResourceCollection.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductSpecification.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductVariant.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Review.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Notifications\\QueuedVerifyEmailNotification.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\HorizonServiceProvider.php' => 
  array (
    0 => 'laravel/horizon',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\UserFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_194020_create_warehouses_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\SetDefaultAddressAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\SendPasswordResetLinkAction.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateBrandAction.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreAdminUserRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreProductImageRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateCategoryRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateProductRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\RoleCollection.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\BrandResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\CategoryResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewCollection.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Warehouse.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\TelescopeServiceProvider.php' => 
  array (
    0 => 'laravel/telescope',
    1 => 'laravel/framework',
    2 => 'psr/container',
    3 => 'laravel/sanctum',
    4 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Support\\FlatQueryFilters.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\CategoryFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\0001_01_01_000002_create_jobs_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193959_create_product_specifications_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\UpdateRoleAction.php' => 
  array (
    0 => 'spatie/laravel-permission',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\LogoutAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-permission',
    2 => 'spatie/laravel-query-builder',
    3 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
    4 => 'spatie/laravel-query-builder',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/scout',
    3 => 'spatie/laravel-query-builder',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreBrandRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewCollection.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/scout',
    3 => 'laravel/sanctum',
    4 => 'spatie/laravel-permission',
    5 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductCollection.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductImageResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'league/flysystem',
    3 => 'psr/http-message',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/scout',
    3 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
    4 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\AddressFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\InventoryItemFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductVariantFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193923_create_categories_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_193942_create_product_images_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\CreateAdminUserAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\LoginAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'symfony/http-foundation',
    4 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateCategoryAction.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UploadProductImageAction.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
    2 => 'symfony/http-foundation',
    3 => 'league/flysystem',
    4 => 'psr/http-message',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\AdminUserStatus.php' => 
  array (
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\BrandController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'spatie/laravel-query-builder',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateBrandRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\ResetPasswordRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\RoleResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-permission',
    2 => 'symfony/http-foundation',
    3 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\UserResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
    4 => 'nesbot/carbon',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Address.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\User.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\0001_01_01_000001_create_cache_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\migrations\\2026_07_15_194005_create_product_variants_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/scout',
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\routes\\console.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/console',
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\CreateAddressAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Address\\CreateAddressAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'setDefaultAddress',
               'type' => 'App\\Actions\\Address\\SetDefaultAddressAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{label: ?string, full_name: string, phone: string, county: string, city: ?string, address_line: string, is_default?: bool}  $data
     */',
             'namespace' => 'App\\Actions\\Address',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Address',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\SetDefaultAddressAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Address\\SetDefaultAddressAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Marks the given address as the user\'s default, unsetting any other
     * default address. Reused by both address creation and updates so there
     * is exactly one place that enforces "one default address per user".
     */',
             'namespace' => 'App\\Actions\\Address',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'App\\Models\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Address\\UpdateAddressAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Address\\UpdateAddressAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'setDefaultAddress',
               'type' => 'App\\Actions\\Address\\SetDefaultAddressAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{label?: ?string, full_name?: string, phone?: string, county?: string, city?: ?string, address_line?: string, is_default?: bool}  $data
     */',
             'namespace' => 'App\\Actions\\Address',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Address',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'App\\Models\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\CreateAdminUserAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Admin\\CreateAdminUserAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{name: string, email: string, phone: ?string, role: string}  $data
     */',
             'namespace' => 'App\\Actions\\Admin',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'user' => 'App\\Models\\User',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\CreateRoleAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Admin\\CreateRoleAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{name: string, permissions: array<int, string>}  $data
     */',
             'namespace' => 'App\\Actions\\Admin',
             'uses' => 
            array (
              'role' => 'Spatie\\Permission\\Models\\Role',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Spatie\\Permission\\Models\\Role',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\UpdateAdminUserAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Admin\\UpdateAdminUserAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{name?: string, phone?: ?string, role?: string, status?: string}  $data
     */',
             'namespace' => 'App\\Actions\\Admin',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Admin\\UpdateRoleAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Admin\\UpdateRoleAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{name?: string, permissions?: array<int, string>}  $data
     */',
             'namespace' => 'App\\Actions\\Admin',
             'uses' => 
            array (
              'role' => 'Spatie\\Permission\\Models\\Role',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Spatie\\Permission\\Models\\Role',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'role',
               'type' => 'Spatie\\Permission\\Models\\Role',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\LoginAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Auth\\LoginAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{email: string, password: string}  $credentials
     */',
             'namespace' => 'App\\Actions\\Auth',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'authenticationexception' => 'Illuminate\\Auth\\AuthenticationException',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'credentials',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\LogoutAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Auth\\LogoutAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'session',
               'type' => 'Illuminate\\Contracts\\Session\\Session',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\RegisterUserAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Auth\\RegisterUserAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{name: string, email: string, phone: ?string, password: string}  $data
     */',
             'namespace' => 'App\\Actions\\Auth',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\ResetPasswordAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Auth\\ResetPasswordAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{token: string, email: string, password: string}  $data
     */',
             'namespace' => 'App\\Actions\\Auth',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Auth\\SendPasswordResetLinkAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Auth\\SendPasswordResetLinkAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{email: string}  $data
     */',
             'namespace' => 'App\\Actions\\Auth',
             'uses' => 
            array (
              'password' => 'Illuminate\\Support\\Facades\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateBrandAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Catalog\\CreateBrandAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{name: string, slug: string, logo_path?: ?string, is_active?: bool}  $data
     */',
             'namespace' => 'App\\Actions\\Catalog',
             'uses' => 
            array (
              'brand' => 'App\\Models\\Brand',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Brand',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateCategoryAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Catalog\\CreateCategoryAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{parent_id?: ?string, name: string, slug: string, icon_path?: ?string, position?: int, is_active?: bool}  $data
     */',
             'namespace' => 'App\\Actions\\Catalog',
             'uses' => 
            array (
              'category' => 'App\\Models\\Category',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Category',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\CreateProductAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Catalog\\CreateProductAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array<string, mixed>  $data
     */',
             'namespace' => 'App\\Actions\\Catalog',
             'uses' => 
            array (
              'product' => 'App\\Models\\Product',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Product',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\ModerateReviewAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Catalog\\ModerateReviewAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Review',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'review',
               'type' => 'App\\Models\\Review',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Enums\\ReviewStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateBrandAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Catalog\\UpdateBrandAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{name?: string, slug?: string, logo_path?: ?string, is_active?: bool}  $data
     */',
             'namespace' => 'App\\Actions\\Catalog',
             'uses' => 
            array (
              'brand' => 'App\\Models\\Brand',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Brand',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'brand',
               'type' => 'App\\Models\\Brand',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateCategoryAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Catalog\\UpdateCategoryAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{parent_id?: ?string, name?: string, slug?: string, icon_path?: ?string, position?: int, is_active?: bool}  $data
     */',
             'namespace' => 'App\\Actions\\Catalog',
             'uses' => 
            array (
              'category' => 'App\\Models\\Category',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Category',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UpdateProductAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Catalog\\UpdateProductAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array<string, mixed>  $data
     */',
             'namespace' => 'App\\Actions\\Catalog',
             'uses' => 
            array (
              'product' => 'App\\Models\\Product',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Product',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'product',
               'type' => 'App\\Models\\Product',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Actions\\Catalog\\UploadProductImageAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Catalog\\UploadProductImageAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array{alt?: ?string, position?: int}  $data
     */',
             'namespace' => 'App\\Actions\\Catalog',
             'uses' => 
            array (
              'product' => 'App\\Models\\Product',
              'productimage' => 'App\\Models\\ProductImage',
              'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\ProductImage',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'product',
               'type' => 'App\\Models\\Product',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'image',
               'type' => 'Illuminate\\Http\\UploadedFile',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\AdminUserStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enums\\AdminUserStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Active',
           'value' => '\'active\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Invited',
           'value' => '\'invited\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Suspended',
           'value' => '\'suspended\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\ProductStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enums\\ProductStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Draft',
           'value' => '\'draft\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Active',
           'value' => '\'active\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Archived',
           'value' => '\'archived\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\ReviewStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enums\\ReviewStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Pending',
           'value' => '\'pending\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Approved',
           'value' => '\'approved\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Rejected',
           'value' => '\'rejected\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Enums\\StockStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enums\\StockStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'InStock',
           'value' => '\'in_stock\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'LowStock',
           'value' => '\'low_stock\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'OutOfStock',
           'value' => '\'out_of_stock\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\AddressController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\AddressController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\AddressResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreAddressRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Address\\CreateAddressAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\AddressResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateAddressRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'App\\Models\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Address\\UpdateAddressAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'App\\Models\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\BrandController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\BrandController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\BrandResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\StoreBrandRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Catalog\\CreateBrandAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\BrandResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\UpdateBrandRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'brand',
               'type' => 'App\\Models\\Brand',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Catalog\\UpdateBrandAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'brand',
               'type' => 'App\\Models\\Brand',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\CategoryController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\CategoryController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\CategoryResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\StoreCategoryRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Catalog\\CreateCategoryAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\CategoryResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\UpdateCategoryRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Catalog\\UpdateCategoryAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ProductController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\ProductController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\ProductCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\ProductResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\StoreProductRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Catalog\\CreateProductAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\ProductResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'product',
               'type' => 'App\\Models\\Product',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\ProductResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\UpdateProductRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'product',
               'type' => 'App\\Models\\Product',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Catalog\\UpdateProductAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'product',
               'type' => 'App\\Models\\Product',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeImage',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\ProductImageResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\StoreProductImageRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'product',
               'type' => 'App\\Models\\Product',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Catalog\\UploadProductImageAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\ReviewController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\ReviewController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\ReviewCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\ReviewResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\UpdateReviewRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'review',
               'type' => 'App\\Models\\Review',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Catalog\\ModerateReviewAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\RoleController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\RoleController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\RoleCollection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\RoleResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\StoreRoleRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Admin\\CreateRoleAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\RoleResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\UpdateRoleRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'role',
               'type' => 'Spatie\\Permission\\Models\\Role',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Admin\\UpdateRoleAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Admin\\UserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\UserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\AdminUserCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\AdminUserResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\StoreAdminUserRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Admin\\CreateAdminUserAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\Admin\\AdminUserResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Admin\\UpdateAdminUserRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Admin\\UpdateAdminUserAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Auth\\AuthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\AuthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\UserResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Auth\\RegisterRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Auth\\RegisterUserAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\UserResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Auth\\LoginRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Auth\\LoginAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Auth\\LogoutAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'me',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\UserResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forgotPassword',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Auth\\ForgotPasswordRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Auth\\SendPasswordResetLinkAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resetPassword',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Auth\\ResetPasswordRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Auth\\ResetPasswordAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\BrandController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\BrandController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\BrandResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'slug',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\CategoryController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CategoryController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'slug',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\FlashDealController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\FlashDealController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\ProductController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\ProductController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\ProductCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\ProductResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'slug',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reviews',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Http\\Resources\\ReviewCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'slug',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Controllers\\SearchController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\SearchController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreAdminUserRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\StoreAdminUserRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreBrandRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\StoreBrandRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreCategoryRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\StoreCategoryRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreProductImageRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\StoreProductImageRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreProductRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\StoreProductRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\StoreRoleRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\StoreRoleRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateAdminUserRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\UpdateAdminUserRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateBrandRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\UpdateBrandRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateCategoryRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\UpdateCategoryRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateProductRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\UpdateProductRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateReviewRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\UpdateReviewRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Admin\\UpdateRoleRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Admin\\UpdateRoleRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Admin',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\ForgotPasswordRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Auth\\ForgotPasswordRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\LoginRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Auth\\LoginRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\RegisterRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Auth\\RegisterRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\Auth\\ResetPasswordRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Auth\\ResetPasswordRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\StoreAddressRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreAddressRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Requests\\UpdateAddressRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateAddressRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\AddressResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\AddressResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin Address */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'address' => 'App\\Models\\Address',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\Admin\\AdminUserCollection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Resources\\PaginatedResourceCollection',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'collects',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\AdminUserResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\Admin\\AdminUserResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin User */',
         'namespace' => 'App\\Http\\Resources\\Admin',
         'uses' => 
        array (
          'user' => 'App\\Models\\User',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources\\Admin',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\PermissionResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\Admin\\PermissionResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin Permission */',
         'namespace' => 'App\\Http\\Resources\\Admin',
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'permission' => 'Spatie\\Permission\\Models\\Permission',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources\\Admin',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
              'permission' => 'Spatie\\Permission\\Models\\Permission',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\Admin\\ProductCollection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Resources\\PaginatedResourceCollection',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'collects',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ProductResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\Admin\\ProductResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin Product */',
         'namespace' => 'App\\Http\\Resources\\Admin',
         'uses' => 
        array (
          'productimageresource' => 'App\\Http\\Resources\\ProductImageResource',
          'productspecificationresource' => 'App\\Http\\Resources\\ProductSpecificationResource',
          'product' => 'App\\Models\\Product',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources\\Admin',
             'uses' => 
            array (
              'productimageresource' => 'App\\Http\\Resources\\ProductImageResource',
              'productspecificationresource' => 'App\\Http\\Resources\\ProductSpecificationResource',
              'product' => 'App\\Models\\Product',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\Admin\\ReviewCollection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Resources\\PaginatedResourceCollection',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'collects',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\ReviewResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\Admin\\ReviewResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin Review */',
         'namespace' => 'App\\Http\\Resources\\Admin',
         'uses' => 
        array (
          'review' => 'App\\Models\\Review',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources\\Admin',
             'uses' => 
            array (
              'review' => 'App\\Models\\Review',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\RoleCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\Admin\\RoleCollection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Resources\\PaginatedResourceCollection',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'collects',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\Admin\\RoleResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\Admin\\RoleResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin Role */',
         'namespace' => 'App\\Http\\Resources\\Admin',
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'role' => 'Spatie\\Permission\\Models\\Role',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources\\Admin',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
              'role' => 'Spatie\\Permission\\Models\\Role',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\BrandResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\BrandResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin Brand */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'brand' => 'App\\Models\\Brand',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'brand' => 'App\\Models\\Brand',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\CategoryResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\CategoryResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin Category */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'category' => 'App\\Models\\Category',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'category' => 'App\\Models\\Category',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\PaginatedResourceCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\PaginatedResourceCollection',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Reshapes Laravel\'s default paginator output (`data`, `links`, `meta` with
 * snake_case keys) into the frontend\'s fixed `PaginatedResponse<T>` contract:
 * `{ data: T[], meta: { currentPage, perPage, total, lastPage } }` — no
 * `links` key, camelCase meta. Every paginated list endpoint\'s Resource
 * collection extends this so the shape only has to be correct once.
 */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'resourcecollection' => 'Illuminate\\Http\\Resources\\Json\\ResourceCollection',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\ResourceCollection',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'paginationInformation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array<string, mixed>  $paginated
     * @param  array<string, mixed>  $default
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'resourcecollection' => 'Illuminate\\Http\\Resources\\Json\\ResourceCollection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'paginated',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\ProductCollection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Resources\\PaginatedResourceCollection',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'collects',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductImageResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\ProductImageResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin ProductImage */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'productimage' => 'App\\Models\\ProductImage',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'storage' => 'Illuminate\\Support\\Facades\\Storage',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'productimage' => 'App\\Models\\ProductImage',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\ProductResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin Product */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'product' => 'App\\Models\\Product',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'product' => 'App\\Models\\Product',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ProductSpecificationResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\ProductSpecificationResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin ProductSpecification */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'productspecification' => 'App\\Models\\ProductSpecification',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'productspecification' => 'App\\Models\\ProductSpecification',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\ReviewCollection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Resources\\PaginatedResourceCollection',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'collects',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\ReviewResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\ReviewResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin Review */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'review' => 'App\\Models\\Review',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'review' => 'App\\Models\\Review',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Http\\Resources\\UserResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\UserResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @mixin User */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'user' => 'App\\Models\\User',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Address.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Address',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'addressfactory' => 'Database\\Factories\\AddressFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'addressfactory' => 'Database\\Factories\\AddressFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<User, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'addressfactory' => 'Database\\Factories\\AddressFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Brand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Brand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'brandfactory' => 'Database\\Factories\\BrandFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'brandfactory' => 'Database\\Factories\\BrandFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'products',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return HasMany<Product, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'brandfactory' => 'Database\\Factories\\BrandFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeActive',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Builder<Brand>  $query
     * @return Builder<Brand>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'brandfactory' => 'Database\\Factories\\BrandFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Category.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Category',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'categoryfactory' => 'Database\\Factories\\CategoryFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'categoryfactory' => 'Database\\Factories\\CategoryFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'parent',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<Category, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'categoryfactory' => 'Database\\Factories\\CategoryFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'children',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return HasMany<Category, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'categoryfactory' => 'Database\\Factories\\CategoryFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'products',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return HasMany<Product, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'categoryfactory' => 'Database\\Factories\\CategoryFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeActive',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Builder<Category>  $query
     * @return Builder<Category>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'categoryfactory' => 'Database\\Factories\\CategoryFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\InventoryItem.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\InventoryItem',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'inventoryitemfactory' => 'Database\\Factories\\InventoryItemFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'inventoryitemfactory' => 'Database\\Factories\\InventoryItemFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'warehouse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<Warehouse, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'inventoryitemfactory' => 'Database\\Factories\\InventoryItemFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'product',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<Product, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'inventoryitemfactory' => 'Database\\Factories\\InventoryItemFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'variant',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<ProductVariant, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'inventoryitemfactory' => 'Database\\Factories\\InventoryItemFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Product.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Product',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property-read StockStatus $stock_status
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'productstatus' => 'App\\Enums\\ProductStatus',
          'stockstatus' => 'App\\Enums\\StockStatus',
          'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
          'productfactory' => 'Database\\Factories\\ProductFactory',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
          'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'searchable' => 'Laravel\\Scout\\Searchable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Laravel\\Scout\\Searchable',
        3 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'category',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<Category, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'brand',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<Brand, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'images',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return HasMany<ProductImage, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'specifications',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return HasMany<ProductSpecification, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'variants',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return HasMany<ProductVariant, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reviews',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return HasMany<Review, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'inventoryItems',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return HasMany<InventoryItem, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'stockStatus',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return Attribute<StockStatus, never>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeActive',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeCategorySlug',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'slug',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeBrandSlugs',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'slugs',
               'type' => 'string',
               'byRef' => false,
               'variadic' => true,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopePriceMin',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopePriceMax',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeSearchQuery',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toSearchableArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'shouldBeSearchable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'makeAllSearchableUsing',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'stockstatus' => 'App\\Enums\\StockStatus',
              'stockstatusresolver' => 'App\\Services\\StockStatusResolver',
              'productfactory' => 'Database\\Factories\\ProductFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'searchable' => 'Laravel\\Scout\\Searchable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductImage.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ProductImage',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productimagefactory' => 'Database\\Factories\\ProductImageFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'product',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<Product, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productimagefactory' => 'Database\\Factories\\ProductImageFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductSpecification.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ProductSpecification',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productspecificationfactory' => 'Database\\Factories\\ProductSpecificationFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'product',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<Product, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productspecificationfactory' => 'Database\\Factories\\ProductSpecificationFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\ProductVariant.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ProductVariant',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productvariantfactory' => 'Database\\Factories\\ProductVariantFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productvariantfactory' => 'Database\\Factories\\ProductVariantFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'product',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<Product, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'productvariantfactory' => 'Database\\Factories\\ProductVariantFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Review.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Review',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'reviewstatus' => 'App\\Enums\\ReviewStatus',
              'reviewfactory' => 'Database\\Factories\\ReviewFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'reviewstatus' => 'App\\Enums\\ReviewStatus',
              'reviewfactory' => 'Database\\Factories\\ReviewFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'product',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<Product, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'reviewstatus' => 'App\\Enums\\ReviewStatus',
              'reviewfactory' => 'Database\\Factories\\ReviewFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return BelongsTo<User, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'reviewstatus' => 'App\\Enums\\ReviewStatus',
              'reviewfactory' => 'Database\\Factories\\ReviewFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeApproved',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Builder<Review>  $query
     * @return Builder<Review>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'reviewstatus' => 'App\\Enums\\ReviewStatus',
              'reviewfactory' => 'Database\\Factories\\ReviewFactory',
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
      ),
       'usedTraits' => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Spatie\\Permission\\Traits\\HasRoles',
        3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        4 => 'Illuminate\\Notifications\\Notifiable',
        5 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'queuedverifyemailnotification' => 'App\\Notifications\\QueuedVerifyEmailNotification',
              'userfactory' => 'Database\\Factories\\UserFactory',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
              'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'queuedverifyemailnotification' => 'App\\Notifications\\QueuedVerifyEmailNotification',
              'userfactory' => 'Database\\Factories\\UserFactory',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
              'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'queuedverifyemailnotification' => 'App\\Notifications\\QueuedVerifyEmailNotification',
              'userfactory' => 'Database\\Factories\\UserFactory',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
              'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addresses',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return HasMany<Address, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'queuedverifyemailnotification' => 'App\\Notifications\\QueuedVerifyEmailNotification',
              'userfactory' => 'Database\\Factories\\UserFactory',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
              'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sendEmailVerificationNotification',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Models\\Warehouse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Warehouse',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'warehousefactory' => 'Database\\Factories\\WarehouseFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'warehousefactory' => 'Database\\Factories\\WarehouseFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'inventoryItems',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return HasMany<InventoryItem, $this>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'warehousefactory' => 'Database\\Factories\\WarehouseFactory',
              'hasulids' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Notifications\\QueuedVerifyEmailNotification.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Notifications\\QueuedVerifyEmailNotification',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Auth\\Notifications\\VerifyEmail',
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Bus\\Queueable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Policies\\AddressPolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\AddressPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'view',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine whether the user can view the model.
     */',
             'namespace' => 'App\\Policies',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'App\\Models\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine whether the user can create models.
     */',
             'namespace' => 'App\\Policies',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine whether the user can update the model.
     */',
             'namespace' => 'App\\Policies',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'App\\Models\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine whether the user can delete the model.
     */',
             'namespace' => 'App\\Policies',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'App\\Models\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\HorizonServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\HorizonServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Laravel\\Horizon\\HorizonApplicationServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'horizon' => 'Laravel\\Horizon\\Horizon',
              'horizonapplicationserviceprovider' => 'Laravel\\Horizon\\HorizonApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the Horizon gate.
     *
     * This gate determines who can access Horizon in non-local environments.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'horizon' => 'Laravel\\Horizon\\Horizon',
              'horizonapplicationserviceprovider' => 'Laravel\\Horizon\\HorizonApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Providers\\TelescopeServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\TelescopeServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hideSensitiveRequestDetails',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Prevent sensitive request details from being logged by Telescope.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the Telescope gate.
     *
     * This gate determines who can access Telescope in non-local environments.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Services\\StockStatusResolver.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\StockStatusResolver',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * The single formula for turning raw inventory rows into the stock_status
 * a customer or admin sees. Used by both ProductResource (storefront) and
 * the admin Inventory endpoint (Phase 5) so there is exactly one place that
 * decides what "low stock" means.
 */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'stockstatus' => 'App\\Enums\\StockStatus',
          'product' => 'App\\Models\\Product',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolve',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Enums\\StockStatus',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'product',
               'type' => 'App\\Models\\Product',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\app\\Support\\FlatQueryFilters.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\FlatQueryFilters',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * spatie/laravel-query-builder reads filters from a nested `?filter[x]=`
 * query key by default. The frontend contract (api-design.md\'s Conventions
 * section) uses flat params instead — `?categorySlug=&brandSlugs[]=` — on
 * every list endpoint. This remaps the flat params QueryBuilder should treat
 * as filters into the nested shape it expects, before it reads the request.
 */',
         'namespace' => 'App\\Support',
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'merge',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array<int, string>  $keys
     */',
             'namespace' => 'App\\Support',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'keys',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\AddressFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\AddressFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Address>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'address' => 'App\\Models\\Address',
          'user' => 'App\\Models\\User',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'default',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that this is the user\'s default address.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'address' => 'App\\Models\\Address',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\BrandFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\BrandFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Brand>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'brand' => 'App\\Models\\Brand',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'brand' => 'App\\Models\\Brand',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\CategoryFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\CategoryFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Category>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'category' => 'App\\Models\\Category',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'category' => 'App\\Models\\Category',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'childOf',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that this category is a child of the given parent.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'category' => 'App\\Models\\Category',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parent',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\InventoryItemFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\InventoryItemFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<InventoryItem>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'inventoryitem' => 'App\\Models\\InventoryItem',
          'product' => 'App\\Models\\Product',
          'warehouse' => 'App\\Models\\Warehouse',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'inventoryitem' => 'App\\Models\\InventoryItem',
              'product' => 'App\\Models\\Product',
              'warehouse' => 'App\\Models\\Warehouse',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lowStock',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that stock is below (or at) the low-stock threshold.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'inventoryitem' => 'App\\Models\\InventoryItem',
              'product' => 'App\\Models\\Product',
              'warehouse' => 'App\\Models\\Warehouse',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'outOfStock',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the item is out of stock.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'inventoryitem' => 'App\\Models\\InventoryItem',
              'product' => 'App\\Models\\Product',
              'warehouse' => 'App\\Models\\Warehouse',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\ProductFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Product>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'productstatus' => 'App\\Enums\\ProductStatus',
          'brand' => 'App\\Models\\Brand',
          'category' => 'App\\Models\\Category',
          'product' => 'App\\Models\\Product',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'brand' => 'App\\Models\\Brand',
              'category' => 'App\\Models\\Category',
              'product' => 'App\\Models\\Product',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'draft',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the product is a draft (not publicly visible).
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'brand' => 'App\\Models\\Brand',
              'category' => 'App\\Models\\Category',
              'product' => 'App\\Models\\Product',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'flashDeal',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the product is an active flash deal.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'productstatus' => 'App\\Enums\\ProductStatus',
              'brand' => 'App\\Models\\Brand',
              'category' => 'App\\Models\\Category',
              'product' => 'App\\Models\\Product',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductImageFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\ProductImageFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<ProductImage>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'product' => 'App\\Models\\Product',
          'productimage' => 'App\\Models\\ProductImage',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'product' => 'App\\Models\\Product',
              'productimage' => 'App\\Models\\ProductImage',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductSpecificationFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\ProductSpecificationFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<ProductSpecification>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'product' => 'App\\Models\\Product',
          'productspecification' => 'App\\Models\\ProductSpecification',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'product' => 'App\\Models\\Product',
              'productspecification' => 'App\\Models\\ProductSpecification',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ProductVariantFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\ProductVariantFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<ProductVariant>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'product' => 'App\\Models\\Product',
          'productvariant' => 'App\\Models\\ProductVariant',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'product' => 'App\\Models\\Product',
              'productvariant' => 'App\\Models\\ProductVariant',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\ReviewFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\ReviewFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Review>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'reviewstatus' => 'App\\Enums\\ReviewStatus',
          'product' => 'App\\Models\\Product',
          'review' => 'App\\Models\\Review',
          'user' => 'App\\Models\\User',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'reviewstatus' => 'App\\Enums\\ReviewStatus',
              'product' => 'App\\Models\\Product',
              'review' => 'App\\Models\\Review',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'approved',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the review has been approved by moderation.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'reviewstatus' => 'App\\Enums\\ReviewStatus',
              'product' => 'App\\Models\\Product',
              'review' => 'App\\Models\\Review',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rejected',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the review has been rejected by moderation.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'reviewstatus' => 'App\\Enums\\ReviewStatus',
              'product' => 'App\\Models\\Product',
              'review' => 'App\\Models\\Review',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
          'user' => 'App\\Models\\User',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The current password being used by the factory.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'invited',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model should be invited but not yet active.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'suspended',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model should be suspended.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\factories\\WarehouseFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\WarehouseFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Warehouse>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'warehouse' => 'App\\Models\\Warehouse',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'warehouse' => 'App\\Models\\Warehouse',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\CatalogSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\CatalogSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'brand' => 'App\\Models\\Brand',
              'category' => 'App\\Models\\Category',
              'inventoryitem' => 'App\\Models\\InventoryItem',
              'product' => 'App\\Models\\Product',
              'warehouse' => 'App\\Models\\Warehouse',
              'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seed the application\'s database.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'adminuserstatus' => 'App\\Enums\\AdminUserStatus',
              'user' => 'App\\Models\\User',
              'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\Afya\\Documents\\Personal\\Anchor\\anchor-api\\database\\seeders\\RolesAndPermissionsSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\RolesAndPermissionsSeeder',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Transcribed from the frontend\'s own fixtures (`MOCK_ROLES` and the
 * `PermissionKey` union in `src/types/admin.ts`) so the roles and
 * permissions this API enforces are exactly the ones the admin UI was
 * designed against — see implementation plan §3.1.
 */',
         'namespace' => 'Database\\Seeders',
         'uses' => 
        array (
          'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
          'seeder' => 'Illuminate\\Database\\Seeder',
          'permission' => 'Spatie\\Permission\\Models\\Permission',
          'role' => 'Spatie\\Permission\\Models\\Role',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
              'seeder' => 'Illuminate\\Database\\Seeder',
              'permission' => 'Spatie\\Permission\\Models\\Permission',
              'role' => 'Spatie\\Permission\\Models\\Role',
              'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
