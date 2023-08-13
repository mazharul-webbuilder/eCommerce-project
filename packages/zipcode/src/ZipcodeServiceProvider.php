<?php

namespace Incevio\Package\Zipcode;

use App\Common\PackageConfig;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class ZipcodeServiceProvider extends ServiceProvider
{
    use PackageConfig;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'zipcode');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'zipcode');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'zipcode');

        // Autoload helpers
        foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
            require_once($filename);
        }

        ##Share inspector Status For Whole Application View:
        // Register the main class to use with the facade
        $this->app->singleton('zipcode', function () {
            return new Zipcode;
        });
    }
}
