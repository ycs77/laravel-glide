<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Glide Source Storage Driver
    |--------------------------------------------------------------------------
    |
    | This value is the driver of glide source storage.
    |
    | Supported Drivers: see Laravel filesystems config.
    |
    */

    'source' => env('GLIDE_SOURCE_DRIVER', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Glide Cache Storage Driver
    |--------------------------------------------------------------------------
    |
    | This value is the driver of glide cache storage.
    |
    | Supported Drivers: see Laravel filesystems config.
    |
    */

    'cache' => env('GLIDE_CACHE_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Glide Image Base URL
    |--------------------------------------------------------------------------
    |
    | This value is the base URL of glide image.
    |
    */

    'base_url' => 'img',

    /*
    |--------------------------------------------------------------------------
    | Glide Server Config
    |--------------------------------------------------------------------------
    |
    | This value is of glide server config.
    |
    | See: \League\Glide\Server@create()
    |
    */

    'config' => [
        'cache_folder' => '.glide-cache',
    ],

];
