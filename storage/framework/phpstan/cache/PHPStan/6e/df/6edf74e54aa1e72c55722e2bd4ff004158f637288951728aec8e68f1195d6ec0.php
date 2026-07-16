<?php declare(strict_types = 1);

// ftm-/var/www/html/app/Models/User.php
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v5-2.3.2',
   'data' => 
  array (
    0 => 
    array (
      'e8283ac4eb665433f3f809a62f47ea37' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
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
         'className' => 'App\\Models\\User',
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
      '00cd4587ae5a750d87005b2cb5a4fe76' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Laravel\\Sanctum',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
          'TToken' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TToken',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Laravel\\Sanctum\\Contracts\\HasAbilities',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
               'default' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Laravel\\Sanctum\\PersonalAccessToken',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 2,
                'endLine' => 2,
              ),
            )),
          ),
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Laravel\\Sanctum\\HasApiTokens',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '9d833bebd5156e1adb507d2263b0a9ca' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Laravel\\Sanctum',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'tokens',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Laravel\\Sanctum',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'str' => 'Illuminate\\Support\\Str',
          ),
           'className' => 'App\\Models\\User',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TToken' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TToken',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\Contracts\\HasAbilities',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\PersonalAccessToken',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Laravel\\Sanctum\\HasApiTokens',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'b5c44e81452cd8bec3bea97e66476e20' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Laravel\\Sanctum',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'tokenCan',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Laravel\\Sanctum',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'str' => 'Illuminate\\Support\\Str',
          ),
           'className' => 'App\\Models\\User',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TToken' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TToken',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\Contracts\\HasAbilities',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\PersonalAccessToken',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Laravel\\Sanctum\\HasApiTokens',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '52b28e90ed989cb5386665fdbdaccbed' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Laravel\\Sanctum',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'tokenCant',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Laravel\\Sanctum',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'str' => 'Illuminate\\Support\\Str',
          ),
           'className' => 'App\\Models\\User',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TToken' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TToken',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\Contracts\\HasAbilities',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\PersonalAccessToken',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Laravel\\Sanctum\\HasApiTokens',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'd046f4439609998ea2bc08d7e7e27ade' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Laravel\\Sanctum',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'createToken',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Laravel\\Sanctum',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'str' => 'Illuminate\\Support\\Str',
          ),
           'className' => 'App\\Models\\User',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TToken' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TToken',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\Contracts\\HasAbilities',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\PersonalAccessToken',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Laravel\\Sanctum\\HasApiTokens',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'd03f591279c243e565de2d973d5b29d6' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Laravel\\Sanctum',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'generateTokenString',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Laravel\\Sanctum',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'str' => 'Illuminate\\Support\\Str',
          ),
           'className' => 'App\\Models\\User',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TToken' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TToken',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\Contracts\\HasAbilities',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\PersonalAccessToken',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Laravel\\Sanctum\\HasApiTokens',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'dfd601d98d93fc15fdd76e8799f71e03' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Laravel\\Sanctum',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'currentAccessToken',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Laravel\\Sanctum',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'str' => 'Illuminate\\Support\\Str',
          ),
           'className' => 'App\\Models\\User',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TToken' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TToken',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\Contracts\\HasAbilities',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\PersonalAccessToken',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Laravel\\Sanctum\\HasApiTokens',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '90a30bbac65ff45a530001b49e1600d2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Laravel\\Sanctum',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'withAccessToken',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Laravel\\Sanctum',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'str' => 'Illuminate\\Support\\Str',
          ),
           'className' => 'App\\Models\\User',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TToken' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TToken',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\Contracts\\HasAbilities',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Laravel\\Sanctum\\PersonalAccessToken',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Laravel\\Sanctum\\HasApiTokens',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Laravel\\Sanctum\\HasApiTokens',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'ac078721d2a5307f1a89adaf7ea88cfc' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Factories',
         'uses' => 
        array (
          'usefactory' => 'Illuminate\\Database\\Eloquent\\Attributes\\UseFactory',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
          'TFactory' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TFactory',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Factories\\Factory',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 2,
                'endLine' => 2,
              ),
            )),
          ),
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'bd09c3c02f3ab3286d738d373badeaaf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Factories',
         'uses' => 
        array (
          'usefactory' => 'Illuminate\\Database\\Eloquent\\Attributes\\UseFactory',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'factory',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Factories',
           'uses' => 
          array (
            'usefactory' => 'Illuminate\\Database\\Eloquent\\Attributes\\UseFactory',
          ),
           'className' => 'App\\Models\\User',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TFactory' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TFactory',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Factories\\Factory',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'f42d3715053b5e0f92038836869d95fc' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Factories',
         'uses' => 
        array (
          'usefactory' => 'Illuminate\\Database\\Eloquent\\Attributes\\UseFactory',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'newFactory',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Factories',
           'uses' => 
          array (
            'usefactory' => 'Illuminate\\Database\\Eloquent\\Attributes\\UseFactory',
          ),
           'className' => 'App\\Models\\User',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TFactory' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TFactory',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Factories\\Factory',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '2771b21513b5f43d111ce232d7b4bcc0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Factories',
         'uses' => 
        array (
          'usefactory' => 'Illuminate\\Database\\Eloquent\\Attributes\\UseFactory',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getUseFactoryAttribute',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Factories',
           'uses' => 
          array (
            'usefactory' => 'Illuminate\\Database\\Eloquent\\Attributes\\UseFactory',
          ),
           'className' => 'App\\Models\\User',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TFactory' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TFactory',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Factories\\Factory',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '74a2228ba9a67ed0d94e4def02cf1c8f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '4a91e56ee999c08fa4f7cdda04834021' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '5f6db8306eebb3967e1ab5ae61a3317e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'bootHasPermissions',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '22a9435fb6f192b39a434a9f551c003e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getPermissionClass',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '95dba3ee6c84aa0975f95213562c8e1e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getWildcardClass',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '668e115eca3655e26d6caf9efd05f785' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'permissions',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'df3a8a89c410fffefdddd18499f50ba0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'scopePermission',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '2a81cf3d401552a5cf40e8bfc6d36eaf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'scopeWithoutPermission',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'd7e1c7507ad94c92e532a042b4832ea0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'convertToPermissionModels',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '22c04ff48a2c8252c46fb0bae8af4774' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'filterPermission',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '48693770e9fe710cb238e56422af130f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasPermissionTo',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'dcf8601e9f30c6758003ac32eadb3bdd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasWildcardPermission',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '415ba174c8a3688b45fcacdfb7d37eab' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'checkPermissionTo',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'dae52d10b7ec756389726d707bf7d51e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasAnyPermission',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '0e0e0d72a5cc33a1c53e52d0c6b830bc' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasAllPermissions',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '50d0af8a02f79974b3eacdd50e52e5c9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasPermissionViaRole',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '160edb2c6833c5d7bc563007bb5b1e36' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasDirectPermission',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'b096a742bc0980f42e9478adfc9da31a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getPermissionsViaRoles',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'c9e9556840abbd657bc3b1b0eb428cf4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getAllPermissions',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '23c41449605d3b2cbd77466da83ca2d7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'collectPermissions',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '50ae426724f30546577e9c9802c44ba0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'detachPermissions',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '64cb6daca0a72e863818b266ae074d68' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'givePermissionTo',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'bc480d4663dca450963da4359772fd15' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'forgetWildcardPermissionIndex',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '7e934055e4a2df6ba5700a22a438ac21' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'syncPermissions',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'd568397f0730440d8d01a8974e9421a8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'revokePermissionTo',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'cd645f053eff62ed982c8521f78be141' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getPermissionNames',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '9b217d27e5239e78e94a7b61d5efc516' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getStoredPermission',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '47e35c93810e7cf3b318a7d0d275c684' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'ensureModelSharesGuard',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'f140bcada0c1b473667ef0a941b5960b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getGuardNames',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '5de3cc6ad452d2bb17d3717fd883ccb4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getDefaultGuardName',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '0f3bf64b2b0aaba63da321b1414b3964' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'forgetCachedPermissions',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '00ccaf5a06860ea68ca4b119786906c9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasAllDirectPermissions',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'cc69cc0c22e23be4c2959cd0ec73b8e0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasAnyDirectPermission',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '9c00ad8bd3b2fd12be96cc723386d479' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'bootHasRoles',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '96e082fe3d747d1f898b227aeed387b4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getRoleClass',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '6795640718aec9af816dc1412a9011cf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'roles',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '64a6a7f8cdd570ade56cbee4de61fe8d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'scopeRole',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '7d90327954777fe1d17471e3731bf376' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'scopeWithoutRole',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '002a3121f4835ad83cebefdf4cc99cc3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'teams',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '2a439b486756163bad636ff1c156019c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'scopeTeam',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '5bb1940504ac390d3c72594aa956bfae' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'scopeWithoutTeam',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '70691aee1e867c0275cdc06de0b3b72b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'collectRoles',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'f6bf9d95faf51519f81abb378af74934' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'detachRoles',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '700fd38e467093d1b103600143f8d4ce' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'assignRole',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '69f65489b0b5dcd5c4159b38d9091f49' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'removeRole',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'd6c5c434b5509f96db7621d75768ea1b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'syncRoles',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'c026c83413fbf4a944094db1ac8d9a55' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasRole',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'ef47b8ac051e634b3b66275de74dba64' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasAnyRole',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '37f194a4e654467fed5cb974b3be8061' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasAllRoles',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '1400b4d786159c25941df907aae6ba23' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'hasExactRoles',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '43c4ca72fe9ab5d14531ff6c2981d2ed' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getDirectPermissions',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'fc7077b75fe79650876e61074dde1afb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getRoleNames',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'fa4496a818093c95029c4e704133ff73' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getStoredRole',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '7d24b2012d3c0cb430c9b98edc8934e1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'config' => 'Spatie\\Permission\\Support\\Config',
          'typeerror' => 'TypeError',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'convertPipeToArray',
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
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '53c392e72bec60867d8a5bd3f08c011a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'c88547d0b1e281516ee2fb5bc9dc76ca' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
        ),
         'className' => 'App\\Models\\User',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
          3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          4 => NULL,
        ),
      )),
      '52a1bec0eb227816b489382774329bfd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'newUniqueId',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
          3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          4 => NULL,
        ),
      )),
      '0b4b755813edef9441234df4fb53b394' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'isValidUniqueId',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
          3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          4 => NULL,
        ),
      )),
      'd8c3f88fbd8b8ea3181554f2e246de6a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'initializeHasUniqueStringIds',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
          3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          4 => NULL,
        ),
      )),
      '3b5084c1f4149a327629d5c23d9448de' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'uniqueIds',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
          3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          4 => NULL,
        ),
      )),
      '23b7159466fe4ff93b0b157765ca3fdf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'resolveRouteBindingQuery',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
          3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          4 => NULL,
        ),
      )),
      '48bc54f8277695f072c8b5a29290f722' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getKeyType',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
          3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          4 => NULL,
        ),
      )),
      '625f80da50dd48e98f212d206b1ab716' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getIncrementing',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
          3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          4 => NULL,
        ),
      )),
      '9aaa87bb821d2a02358d164c854a9831' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'handleInvalidUniqueId',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueStringIds',
          3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          4 => NULL,
        ),
      )),
      'a37d1366a4ca91234818a663ee348dc1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'newUniqueId',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '83b9077266f66fbc83c5f0502bf5e967' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'isValidUniqueId',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '9526e410d42ceb8c25d0424807503a6a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Notifications',
         'uses' => 
        array (
        ),
         'className' => 'App\\Models\\User',
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
         'typeAliasClassName' => 'Illuminate\\Notifications\\Notifiable',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Notifications\\Notifiable',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'f38878a858950d4f43e5248291b41298' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Notifications',
         'uses' => 
        array (
        ),
         'className' => 'App\\Models\\User',
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
         'typeAliasClassName' => 'Illuminate\\Notifications\\HasDatabaseNotifications',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Notifications\\HasDatabaseNotifications',
          3 => 'Illuminate\\Notifications\\Notifiable',
          4 => NULL,
        ),
      )),
      'eb7cbf233e2fc59b28b319698d803bff' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Notifications',
         'uses' => 
        array (
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'notifications',
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
         'typeAliasClassName' => 'Illuminate\\Notifications\\HasDatabaseNotifications',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Notifications\\HasDatabaseNotifications',
          3 => 'Illuminate\\Notifications\\Notifiable',
          4 => NULL,
        ),
      )),
      '51775cb3b5104d18e62dcadcf83be12a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Notifications',
         'uses' => 
        array (
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'readNotifications',
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
         'typeAliasClassName' => 'Illuminate\\Notifications\\HasDatabaseNotifications',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Notifications\\HasDatabaseNotifications',
          3 => 'Illuminate\\Notifications\\Notifiable',
          4 => NULL,
        ),
      )),
      'ebd66a4eb561d51cda31b3492e2dfc25' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Notifications',
         'uses' => 
        array (
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'unreadNotifications',
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
         'typeAliasClassName' => 'Illuminate\\Notifications\\HasDatabaseNotifications',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Notifications\\HasDatabaseNotifications',
          3 => 'Illuminate\\Notifications\\Notifiable',
          4 => NULL,
        ),
      )),
      '23c28bdafbc8d530e370b376983a8fac' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Notifications',
         'uses' => 
        array (
          'dispatcher' => 'Illuminate\\Contracts\\Notifications\\Dispatcher',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
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
         'typeAliasClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Notifications\\RoutesNotifications',
          3 => 'Illuminate\\Notifications\\Notifiable',
          4 => NULL,
        ),
      )),
      'aaea799af607aa2db7c6d6b6a115a52c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Notifications',
         'uses' => 
        array (
          'dispatcher' => 'Illuminate\\Contracts\\Notifications\\Dispatcher',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'notify',
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
         'typeAliasClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Notifications\\RoutesNotifications',
          3 => 'Illuminate\\Notifications\\Notifiable',
          4 => NULL,
        ),
      )),
      '6e2c91525bc46c6bdd243a398287fdde' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Notifications',
         'uses' => 
        array (
          'dispatcher' => 'Illuminate\\Contracts\\Notifications\\Dispatcher',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'notifyNow',
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
         'typeAliasClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Notifications\\RoutesNotifications',
          3 => 'Illuminate\\Notifications\\Notifiable',
          4 => NULL,
        ),
      )),
      'c8abdde33ad08b1381a403de01c0ade0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Notifications',
         'uses' => 
        array (
          'dispatcher' => 'Illuminate\\Contracts\\Notifications\\Dispatcher',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'routeNotificationFor',
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
         'typeAliasClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Notifications\\RoutesNotifications',
          3 => 'Illuminate\\Notifications\\Notifiable',
          4 => NULL,
        ),
      )),
      '2fc9e2dab955d1f0ed7e6e23a2c14a08' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'b322c9d314258a3b09c0620d521164ff' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'bootSoftDeletes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '4b5619ddfede94bbe76de7cf39a15d39' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'initializeSoftDeletes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'fab07f317ee021a1d8738708513fc7bf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'forceDelete',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'fb63d125cf428627c098b87b7e3def20' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'forceDeleteQuietly',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '5079eced9deeceff67efac507a9eef73' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'forceDestroy',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'ebb129a24b6ccdca977056b7074c4a5c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'performDeleteOnModel',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '4c8b6a1c5753925fc0a7c1237a1adb3e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'runSoftDelete',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '2aeb7c7e8579098449b009b4044b8158' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'restore',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '458cada751904f2db13fa5cb215ade1f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'restoreQuietly',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '90f5807dfdf2113d5672ffb92074f7f9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'trashed',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '810c17c851a1930713072cf0068425c8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'softDeleted',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'aaedb5618a6fa07e0fe2de70580c66fb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'restoring',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '3a3ca88ab68e21d0ab511666917e7a65' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'restored',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '524664670dcaf32ebd905d667ce99302' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'forceDeleting',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '0bc658d9b2ad810822c6f416066f16b0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'forceDeleted',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'd7c6066f15a78c17def83b7a0880f8c8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'isForceDeleting',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '9f24dbb1572fb833f60da0eec9ad62c7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getDeletedAtColumn',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      'ffec0ade8799236cee6a94691faf578a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'basecollection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'App\\Models\\User',
         'functionName' => 'getQualifiedDeletedAtColumn',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'basecollection' => 'Illuminate\\Support\\Collection',
          ),
           'className' => 'App\\Models\\User',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
         'traitData' => 
        array (
          0 => '/var/www/html/app/Models/User.php',
          1 => 'App\\Models\\User',
          2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          3 => NULL,
          4 => '/** @use HasFactory<UserFactory> */',
        ),
      )),
      '07f4567b31555d326ff06fcc190476fb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
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
         'className' => 'App\\Models\\User',
         'functionName' => 'casts',
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
      'c6ef79030fc92944607670772828ea4f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
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
         'className' => 'App\\Models\\User',
         'functionName' => 'addresses',
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
      'b17a7c29e2eaeff30f64eab0ad23c41f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
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
         'className' => 'App\\Models\\User',
         'functionName' => 'orders',
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
      '643d0a130eb6232a99e8e6248c78aaca' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
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
         'className' => 'App\\Models\\User',
         'functionName' => 'wishlist',
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
      '7c96013b048e83807f9f5db3bca5369e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
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
         'className' => 'App\\Models\\User',
         'functionName' => 'compareList',
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
      '5ccefc4ed319a41efff2429634ed49ba' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
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
         'className' => 'App\\Models\\User',
         'functionName' => 'sendEmailVerificationNotification',
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
      '/var/www/html/app/Models/User.php' => '393cceae58109bc2e9b2c69633326a97da0c3e0f814039c94ae427a286d3fefe',
      '/var/www/html/vendor/composer/../laravel/sanctum/src/HasApiTokens.php' => '7400600b832dc377ac5f51d051a917775f6efc0d2176a1de7bd7826499ae6509',
      '/var/www/html/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Factories/HasFactory.php' => 'b6cb2b164e90168e80963a5549541f5f3188a3ec8cfd368bf3611bd94fbd46a7',
      '/var/www/html/vendor/composer/../spatie/laravel-permission/src/Traits/HasRoles.php' => '3412a3f50444dd6c8a836b56c96c8cb47d0c197faad8e0e2963d94326f2fac9a',
      '/var/www/html/vendor/composer/../spatie/laravel-permission/src/Traits/HasPermissions.php' => 'db6fa62ee9ad18299f22e3b0e15372e2913e75828159dffaa0a95eaf220ec2a5',
      '/var/www/html/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasUlids.php' => '05a9799d0cc82991d414228dbee5b77772ca18d2e3ca88f50bdafcb42bacde62',
      '/var/www/html/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasUniqueStringIds.php' => '3d5612d3c0a56c6c9f19e628b02085d4d68a64d9d07656742725cec78d4a79c5',
      '/var/www/html/vendor/composer/../laravel/framework/src/Illuminate/Notifications/Notifiable.php' => '573fa9bb96fa392434450c9cd9deb8d4e40a5bb93c140a648267b48dfa0433ac',
      '/var/www/html/vendor/composer/../laravel/framework/src/Illuminate/Notifications/HasDatabaseNotifications.php' => 'a7a163aa1f98a0ae4cd2135905b6852e29a850beb4296aa72c44c37d22832135',
      '/var/www/html/vendor/composer/../laravel/framework/src/Illuminate/Notifications/RoutesNotifications.php' => '82891713db67f6df9ea3b400c9905d26da7834b51d26f53dd3bdb1d7f6a78497',
      '/var/www/html/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/SoftDeletes.php' => 'da1b0c13d78ba2f62e97e5627c3149f4e81b9cf9b6092d4ca7f02ca5e5bbcfec',
    ),
  ),
));