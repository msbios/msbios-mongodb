<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\MongoDB;

return [

    'controllers' => [
        'factories' => [
            Controller\IndexController::class =>
                Factory\IndexControllerFactory::class
        ],
        'aliases' => [
            \MSBios\Application\Controller\IndexController::class =>
                Controller\IndexController::class
        ]
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../../view',
        ],
    ],

    \MSBios\Assetic\Module::class => [
        'maps' => [
            // css
            'default/css/bootstrap.min.css' =>
                __DIR__ . '/../../vendor/msbios/theme/themes/default/public/css/bootstrap.min.css',
            'default/css/bootstrap-theme.min.css' =>
                __DIR__ . '/../../vendor/msbios/theme/themes/default/public/css/bootstrap-theme.min.css',
            'default/css/style.css' =>
                __DIR__ . '/../../vendor/msbios/theme/themes/default/public/css/style.css',
            // js
            'default/js/jquery-3.1.0.min.js' =>
                __DIR__ . '/../../vendor/msbios/theme/themes/default/public/js/jquery-3.1.0.min.js',
            'default/js/bootstrap.min.js' =>
                __DIR__ . '/../../vendor/msbios/theme/themes/default/public/js/bootstrap.min.js',
            // imgs
            'default/img/zf-logo-mark.svg' =>
                __DIR__ . '/../../vendor/msbios/theme/themes/default/public/img/zf-logo-mark.svg',
        ],
    ],
];
