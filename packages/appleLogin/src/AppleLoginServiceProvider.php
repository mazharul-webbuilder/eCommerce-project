<?php

namespace Incevio\Package\AppleLogin;

use App\Common\PackageConfig;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Socialite\Contracts\Factory;
use Incevio\Package\AppleLogin\Services\SignInWithAppleService;

class AppleLoginServiceProvider extends ServiceProvider
{
    use PackageConfig;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'appleLogin');

        // Register the apple socialite driver
        $this->bootAppleLoginDriver();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/services.php', 'services');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'appleLogin');

        // Autoload helpers
        foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
            require_once($filename);
        }

        // Register the main class to use with the facade
        $this->app->singleton('appleLogin', function () {
            return new AppleLogin;
        });
    }

    /**
     * Register the apple socialite driver
     *
     * @return void
     */
    public function bootAppleLoginDriver()
    {
        $socialite = $this->app->make(Factory::class);

        $socialite->extend(
            'apple',
            function ($app) use ($socialite) {
                $config = $app['config']['services.apple'];

                return $socialite->buildProvider(SignInWithAppleService::class, $config);
            }
        );
    }
}
