<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\MongoDB;

return [
    'service_manager' => [
        'abstract_factories' => [
            new Factory\ClientAbstractFactory
        ],
        'factories' => [
            Module::class =>
                Factory\ModuleFactory::class,
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
