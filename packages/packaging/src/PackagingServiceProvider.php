<?php

namespace Incevio\Package\Packaging;

use App\Common\PackageConfig;
use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Incevio\Package\Packaging\Models\Packaging;
use Incevio\Package\Packaging\Policies\PackagingPolicy;

class PackagingServiceProvider extends ServiceProvider
{
    use PackageConfig;


    protected $policies = [
        Packaging::class => PackagingPolicy::class,
    ];


    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'packaging');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //         $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'packaging');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'packaging');


        //Register Policies for the package
        $this->registerPolicies();

        // Autoload helpers
        foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
            require_once($filename);
        }
    }
}
