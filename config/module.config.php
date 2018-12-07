<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\MongoDB;

use MSBios\Factory\ModuleFactory;

return [
    'service_manager' => [
        'abstract_factories' => [
            Factory\ClientAbstractFactory::class =>
                new Factory\ClientAbstractFactory
        ],
        'factories' => [
            Module::class =>
                ModuleFactory::class,
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
