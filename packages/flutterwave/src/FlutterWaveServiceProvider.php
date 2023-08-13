<?php

namespace Incevio\Package\FlutterWave;

use App\Common\PackageConfig;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class FlutterWaveServiceProvider extends ServiceProvider
{
    use PackageConfig;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'flutterwave');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'flutterwave');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'flutterwave');

        // Autoload helpers
        foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
            require_once($filename);
        }
    }
}
