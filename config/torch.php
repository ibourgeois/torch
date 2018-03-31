<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Environments
    |--------------------------------------------------------------------------
    |
    | 
    |
    |
    |
    */

    'default_environment' => env('TORCH_ENVIRONMENT', 'development'),

    'environment' => [

        'production' => [
            'host' => env('TORCH_PRODUCTION_HOST', '127.0.0.1'),
        ],

        'staging' => [
            'host' => env('TORCH_STAGING_HOST', '127.0.0.1'),
        ],

        'development' => [
            'host' => env('TORCH_DEVELOPMENT_HOST', '127.0.0.1'),
        ],

    ],

];