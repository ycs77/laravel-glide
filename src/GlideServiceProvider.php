<?php

namespace Ycs77\LaravelGlide;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Glide\Server;

class GlideServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('glide', function ($app) {
            $config = $app['config']->get('glide');

            $config['source'] = Storage::disk($config['source'])->getDriver();
            $config['cache'] = Storage::disk($config['cache'])->getDriver();
            $config['watermarks'] = Storage::disk($config['watermarks'])->getDriver();

            return Server::create($config);
        });

        $this->app->alias('glide', Server::class);

        $this->mergeConfigFrom(
            __DIR__.'/../config/glide.php', 'glide'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/glide.php' => config_path('glide.php'),
        ]);
    }
}
