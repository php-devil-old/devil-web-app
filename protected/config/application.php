<?php
/**
 * Главный конфигурационный файл приложения
 */

require __DIR__ . '/environment.php';

return [
    'components' => [
        'db'     => require __DIR__ . '/database.php',

        'router' => [
            'class'   => \PhpDevil\core\components\router\Router::class,
            'modules' => [
                'admin' => '/admin/',
            ],
        ],

        'user' => [
            'class'   => \common\components\User::class,
            'idenity' => \WebWizardry\DevilModules\user\models\Idenity::class,
        ],
    ],

    'modules' => [
        'user' => [
            'class' => \WebWizardry\DevilModules\user\UserModule::class,
            'abac'  => [
                'backend' => [\common\abac\UserRolesMembership::class, 'isAdmin']
            ],
        ],
        'admin' => [
            'class' => \PhpDevil\WibleCMS\WibleCms::class,
            'abac'  => [
                'frontend' => [\common\abac\UserRolesMembership::class, 'isEditor']
            ],
        ],
    ],
];

