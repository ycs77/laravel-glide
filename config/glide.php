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

    'source' => env('GLIDE_SOURCE_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Glide Source Folder
    |--------------------------------------------------------------------------
    |
    | This value is the folder of glide source.
    |
    */

    'source_folder' => '',

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
    | Glide Cache URL
    |--------------------------------------------------------------------------
    |
    | This value is the URL prefix of glide cache. If no setting this value,
    | the default value will use the value of "base_url".
    |
    */

    'cache_url' => null,

    /*
    |--------------------------------------------------------------------------
    | Glide Cache Folder
    |--------------------------------------------------------------------------
    |
    | This value is the folder of glide cache.
    |
    */

    'cache_folder' => '.glide-cache',

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
    | Glide Image Driver
    |--------------------------------------------------------------------------
    |
    | This value is the image driver of glide.
    |
    | Supported Drivers: "gd", "imagick"
    |
    */

    'driver' => 'gd',

    /*
    |--------------------------------------------------------------------------
    | Glide Image Response Type
    |--------------------------------------------------------------------------
    |
    | This value is the response type of glide server.
    |
    | Supported Types: "httpfoundation", "psr7"
    |
    */

    'response_type' => 'httpfoundation',

    /*
    |--------------------------------------------------------------------------
    | Glide Max Image Size
    |--------------------------------------------------------------------------
    |
    | This value is the maximum image size in pixels of glide image.
    |
    */

    'max_image_size' => null,

    /*
    |--------------------------------------------------------------------------
    | Glide Signature Key
    |--------------------------------------------------------------------------
    |
    | This value is the signature secret key of glide.
    |
    */

    'key' => env('APP_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Glide Watermarks Storage Driver
    |--------------------------------------------------------------------------
    |
    | This value is the driver of glide watermarks storage.
    |
    | Supported Drivers: see Laravel filesystems config.
    |
    */

    'watermarks' => env('GLIDE_WATERMARKS_DRIVER', null),

    /*
    |--------------------------------------------------------------------------
    | Glide Watermarks Folder
    |--------------------------------------------------------------------------
    |
    | This value is the folder of glide watermarks.
    |
    */

    'watermarks_folder' => '',

    /*
    |--------------------------------------------------------------------------
    | Glide Image Defaults
    |--------------------------------------------------------------------------
    |
    | This value is define the defaults attributes of the all glide images.
    |
    */

    'defaults' => [
        // 'mark' => 'logo.png',
        // 'markw' => '30w',
        // 'markpad' => '5w',
    ],

    /*
    |--------------------------------------------------------------------------
    | Glide Image Presets
    |--------------------------------------------------------------------------
    |
    | This value is define the presets attributes of the glide images.
    |
    */

    'presets' => [
        // 'small' => [
        //     'w' => 200,
        //     'h' => 200,
        //     'fit' => 'crop',
        // ],
        // 'medium' => [
        //     'w' => 600,
        //     'h' => 400,
        //     'fit' => 'crop',
        // ],
    ],

];
