<?php

namespace Ycs77\LaravelGlide\Facades;

use Illuminate\Support\Facades\Facade;
use Ycs77\LaravelGlide\Controllers\ImageController;

/**
 * @method static void setSource(\League\Flysystem\FilesystemOperator $source)
 * @method static \League\Flysystem\FilesystemOperator getSource()
 * @method static void setSourcePathPrefix(string $sourcePathPrefix)
 * @method static string getSourcePathPrefix()
 * @method static string getSourcePath(string $path)
 * @method static bool sourceFileExists(string $path)
 * @method static void setBaseUrl(string $baseUrl)
 * @method static string getBaseUrl()
 * @method static void setCache(\League\Flysystem\FilesystemOperator $cache)
 * @method static \League\Flysystem\FilesystemOperator getCache()
 * @method static void setCachePathPrefix(string $cachePathPrefix)
 * @method static string getCachePathPrefix()
 * @method static void setTempDir(string $tempDir)
 * @method static string getTempDir()
 * @method static void setGroupCacheInFolders(bool $groupCacheInFolders)
 * @method static bool getGroupCacheInFolders()
 * @method static void setCacheWithFileExtensions(bool $cacheWithFileExtensions)
 * @method static bool getCacheWithFileExtensions()
 * @method static string getCachePath(string $path, array $params)
 * @method static bool cacheFileExists(string $path, array $params)
 * @method static bool deleteCache(string $path)
 * @method static void setApi(\League\Glide\Api\ApiInterface $api)
 * @method static \League\Glide\Api\ApiInterface getApi()
 * @method static void setDefaults(array $defaults)
 * @method static array getDefaults()
 * @method static void setPresets(array $presets)
 * @method static array getPresets()
 * @method static array getAllParams(array $params)
 * @method static void setResponseFactory(\League\Glide\Responses\ResponseFactoryInterface|null $responseFactory)
 * @method static \League\Glide\Responses\ResponseFactoryInterface|null getResponseFactory()
 * @method static mixed getImageResponse(string $path, array $params)
 * @method static string getImageAsBase64(string $path, array $params)
 * @method static void outputImage(string $path, array $params)
 * @method static string makeImage(string $path, array $params)
 *
 * @see \League\Glide\Server
 */
class Glide extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'glide';
    }

    /**
     * Register the glide image route.
     *
     * @param  array  $options
     * @return void
     */
    public static function route(array $options = [])
    {
        $options['base_url'] = $options['base_url'] ?? self::$app['config']['glide.base_url'];

        static::$app->make('router')
            ->get('/'.$options['base_url'].'/{path}', $options['action'] ?? '\\'.ImageController::class)
            ->where('path', '.*')
            ->name('image');
    }

    /**
     * Get the manipulated image url from glide.
     *
     * @param  string  $path
     * @param  array  $attributes
     * @return string
     */
    public static function url(string $path, array $attributes = [])
    {
        if (filter_var($path, FILTER_VALIDATE_URL)) {
            return $path;
        }

        return static::$app['url']->route('image', array_merge(['path' => $path], $attributes));
    }
}
