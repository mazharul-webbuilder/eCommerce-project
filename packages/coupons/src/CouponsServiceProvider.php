<?php

namespace Incevio\Package\Coupons;

use App\Common\PackageConfig;
use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Incevio\Package\Coupons\Models\Coupon;
use Incevio\Package\Coupons\Policies\CouponPolicy;

class CouponsServiceProvider extends ServiceProvider
{
    use PackageConfig;

    protected $policies = [
        Coupon::class => CouponPolicy::class,
    ];

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'coupons');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'trendingKeywords');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'coupons');

        //Register Policies for the package
        $this->registerPolicies();

        // Autoload helpers
        foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
            require_once($filename);
        }
    }
}
