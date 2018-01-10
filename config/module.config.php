<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\MongoDB;

return [

    'service_manager' => [
        'factories' => [
            Module::class =>
                Factory\ModuleFactory::class,
        ]
    ],

    Module::class => [

//        /**
//         *
//         * Expects: bool
//         * Default: true
//         */
//        'default_cleanup_buffer' => true,
//
//        /**
//         * Enables or disables the deploy.
//         *
//         * Expects: array
//         * Default: [
//         *     Listener\AssetListener::class =>
//         *         'listener' => Listener\AssetListener::class,
//         *         'method' => 'onDispatchError',
//         *         'event' => \Zend\Mvc\MvcEvent::EVENT_DISPATCH_ERROR,
//         *         'priority' => 1,
//         *     ],
//         * ]
//         */
//        'listeners' => [
//            Listener\AssetListener::class => [
//                'listener' => Listener\AssetListener::class,
//                'method' => 'onDispatchError',
//                'event' => \Zend\Mvc\MvcEvent::EVENT_DISPATCH_ERROR,
//                'priority' => 1,
//            ],
//        ],
//
//        /**
//         *
//         * Expects: array
//         * Default: true
//         */
//        'resolvers' => [
//            Resolver\MapResolver::class => 100900,
//            Resolver\CollectionResolver::class => 100700,
//            Resolver\PathStackResolver::class => 100500,
//        ],
//
//        'collections' => [
//        ],
//
//        'paths' => [
//        ],
//
//        'maps' => [
//        ],
//
//        'filters' => [
//        ],
//
//        'caching' => [
//        ],
//
//        // 'view_helper' => [
//        //     'cache' => 'Application\Cache\Redis',
//        //  // You will need to require the factory used for the cache yourself.
//        //     'append_timestamp' => true, // optional, if false never append a query param
//        //     'query_string' => '_', // optional
//        // ],
//        //

    ],
];
