<?php

return [
    'debug' => false,

    'datetime' => [
        'timezone' => 'UTC',
    ],

    'views' => [
        'path'       => __DIR__ . '/views',
        'extension'  => 'php',
        'extensions' => [],
    ],

    'providers' => [
        'Enstart\ServiceProvider\ServiceProvider',
        'App\Providers\AppProvider',
    ],

    'logging' => [
        'name'  => 'enstart',
        'level' => 'error',
        'file'  => __DIR__ . '/logs/' . date('Ymd') . '.log',
    ],

    'commands' => [
        'App\Commands\HelloWorldCommand',
    ],
];
