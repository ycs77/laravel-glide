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
    | Glide Source Path Prefix
    |--------------------------------------------------------------------------
    |
    | This value is the path prefix of glide source.
    |
    */

    'source_path_prefix' => null,

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
    | Glide Cache Path Prefix
    |--------------------------------------------------------------------------
    |
    | This value is the path prefix of glide cache.
    |
    */

    'cache_path_prefix' => '.glide-cache',

    /*
    |--------------------------------------------------------------------------
    | Temp Directory
    |--------------------------------------------------------------------------
    |
    | This value is the temp directory of glide.
    |
    */

    'temp_dir' => null,

    /*
    |--------------------------------------------------------------------------
    | Group Cache In Folders
    |--------------------------------------------------------------------------
    |
    | This value is the group cache in folders.
    |
    */

    'group_cache_in_folders' => true,

    /*
    |--------------------------------------------------------------------------
    | Cache With File Extensions
    |--------------------------------------------------------------------------
    |
    | This value is the cache with file extensions.
    |
    */

    'cache_with_file_extensions' => false,

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
    | Glide Max Image Size
    |--------------------------------------------------------------------------
    |
    | This value is the maximum image size in pixels of glide image.
    |
    */

    'max_image_size' => null,

    /*
    |--------------------------------------------------------------------------
    | Glide Watermarks Root Directory
    |--------------------------------------------------------------------------
    |
    | This value is the root directory of glide watermarks storage.
    |
    */

    'watermarks' => env('GLIDE_WATERMARKS_ROOT_DIR', null),

    /*
    |--------------------------------------------------------------------------
    | Glide Watermarks Path Prefix
    |--------------------------------------------------------------------------
    |
    | This value is the path prefix of glide watermarks.
    |
    */

    'watermarks_path_prefix' => null,

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
