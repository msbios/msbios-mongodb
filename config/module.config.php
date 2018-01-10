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
            \MongoDB\Client::class =>
                Factory\ClientFactory::class
        ]
    ],

    Module::class => [

        \MongoDB\Client::class => [
            /**
             *
             * Expects: string
             * Default: mongodb://127.0.0.1/
             */
            'uri' => 'mongodb://127.0.0.1/',

            /**
             *
             * Expects: array
             * Default: []
             */
            'uriOptions' => [
                //...
            ],

            /**
             *
             * Expects: array
             * Default: []
             */
            'driverOptions' => [
                //...
            ]
        ]
    ],
];
