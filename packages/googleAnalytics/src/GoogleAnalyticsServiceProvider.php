<?php

namespace Incevio\Package\GoogleAnalytics;

use App\Common\PackageConfig;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class GoogleAnalyticsServiceProvider extends ServiceProvider
{
    use PackageConfig;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'analytics');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'analytics');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'analytics');

        // Autoload helpers
        foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
            require_once($filename);
        }

        // Register the main class to use with the facade
        // $this->app->singleton('analytics', function () {
        //     return new analytics;
        // });
    }
}
