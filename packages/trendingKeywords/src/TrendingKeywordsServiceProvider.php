<?php

namespace Incevio\Package\TrendingKeywords;

use App\Common\PackageConfig;
use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class TrendingKeywordsServiceProvider extends ServiceProvider
{
    use PackageConfig;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'trendingKeywords');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'trendingKeywords');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'trendingKeywords');

        // Autoload helpers
        // foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
        //     require_once($filename);
        // }
    }
}
