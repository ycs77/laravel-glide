<?php

namespace Ycs77\LaravelGlide;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Glide\ServerFactory;

class GlideServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('glide', function ($app) {
            $config = $app['config']->get('glide');

            $config['source'] = Storage::disk($config['source'])->getDriver();
            $config['cache'] = Storage::disk($config['cache'])->getDriver();

            return ServerFactory::create($config);
        });

        $this->app->alias('glide', ServerFactory::class);

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
