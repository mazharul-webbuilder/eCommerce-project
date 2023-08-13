<?php

namespace Incevio\Package\PaypalMarketplace;

use App\Common\PackageConfig;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Incevio\Package\PaypalMarketplace\Commands\PaypalExistingWebhook;
use Incevio\Package\PaypalMarketplace\Commands\PaypalConfigureWebhook;

class PaypalMarketplaceServiceProvider extends ServiceProvider
{
    use PackageConfig;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'paypalMarketplace');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PaypalExistingWebhook::class,
                PaypalConfigureWebhook::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'paypalMarketplace');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'paypalMarketplace');

        // Autoload helpers
        foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
            require_once($filename);
        }
    }
}
