<?php

namespace Ycs77\LaravelGlide\Facades;

use Illuminate\Support\Facades\Facade;
use Ycs77\LaravelGlide\Controllers\ImageController;

/**
 * @method static \League\Glide\Server setImageManager(\Intervention\Image\ImageManager $imageManager)
 * @method static \Intervention\Image\ImageManager getImageManager()
 * @method static \League\Glide\Server setManipulators(array $manipulators)
 * @method static array getManipulators()
 * @method static \League\Glide\Server setSource(\League\Flysystem\FilesystemInterface|string $source)
 * @method static \League\Flysystem\FilesystemInterface getSource()
 * @method static \League\Glide\Server setSourceFolder(string $sourceFolder)
 * @method static string getSourceFolder()
 * @method static \League\Glide\Server setBaseUrl(string $baseUrl)
 * @method static string getBaseUrl()
 * @method static \League\Glide\Server setCacheUrl(string $cacheUrl)
 * @method static string getCacheUrl()
 * @method static \League\Glide\Server setCache(\League\Flysystem\FilesystemInterface|string $cache)
 * @method static \League\Flysystem\FilesystemInterface getCache()
 * @method static \League\Glide\Server setCacheFolder(string $cacheFolder)
 * @method static string getCacheFolder()
 * @method static \League\Glide\Server setKey(string $key)
 * @method static string getKey()
 * @method static \League\Glide\Server setResponseType(string $responseType)
 * @method static string getResponseType()
 * @method static \League\Glide\Server setDefaults(array $defaults)
 * @method static array getDefaults()
 * @method static \League\Glide\Server setPresets(array $presets)
 * @method static array getPresets()
 * @method static \League\Glide\Image fromPath(string $path, array $attributes = [])
 * @method static \League\Glide\Image fromRequest(\Symfony\Component\HttpFoundation\Request|\Psr\Http\Message\RequestInterface $request = null)
 * @method static \League\Glide\Server create(array $config = [])
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
        $options['base_url'] = $options['base_url'] || self::$app['config']['glide.base_url'];

        static::$app->make('router')
            ->get('/'.$options['base_url'].'/{path}', $options['action'] ?? '\\'.ImageController::class)
            ->where('path', '.*');
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

        return static::$app['url']->to(
            static::getFacadeRoot()->fromPath($path, $attributes)
        );
    }
}
