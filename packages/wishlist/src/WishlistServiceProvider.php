<?php

namespace Incevio\Package\Wishlist;

use App\Common\PackageConfig;
// use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Incevio\Package\Wishlist\Models\Wishlist;
use Incevio\Package\Wishlist\Policies\WishlistPolicy;

class WishlistServiceProvider extends ServiceProvider
{
    use PackageConfig;

    protected $policies = [
        Wishlist::class => WishlistPolicy::class,
    ];

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'wishlist');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'trendingKeywords');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'wishlist');

        // Register policies for the package
        $this->registerPolicies();

        // Autoload helpers
        //         foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
        //             require_once($filename);
        //         }
    }
}
