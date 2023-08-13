<?php

namespace App\Http\Middleware;

use App\Models\Customer;
use App\Helpers\ListHelper;
use Closure;
use Illuminate\Support\Facades\Cache; // TEMPORARY
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class InitSettings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Ignore the setup routes
        if ($request->is('install*')) {
            return $next($request);
        }

        setSystemConfig();

        // Set theme views namespace to load theme views
        View::addNamespace('theme', theme_views_path());

        if (Auth::guard('web')->check()) {
            // Check if the user has impersonated
            if ($request->session()->has('impersonated')) {
                Auth::onceUsingId($request->session()->get('impersonated'));
            }

            if ($request->is('admin/*') || $request->is('account/*')) {
                // $this->can_load();
            } else {
                return $next($request); // Skip for storefront routes
            }

            // Get current user
            $user = Auth::guard('web')->user();

            // If the user from the platform then no need to set shop settings
            if (!$user->isFromPlatform() && $user->merchantId()) {
                setShopConfig($user->merchantId());
            }

            // Set all authorization slugs into the session to check permission very fast
            // $permissions = ListHelper::authorizations();

            // Caching permissions creates some issue on login from multiple acc on diff browsers
            $permissions = Cache::remember('permissions_' . $user->id, system_cache_remember_for(), function () {
                return ListHelper::authorizations();
            });

            $permissions = isset($extra_permissions) ? array_merge($extra_permissions, $permissions) : $permissions;

            // Set user permissions into the config
            config()->set('permissions', $permissions);

            // For the authorization purpouse the Super Admin will need auth slugs to hide the merchant module on the dashboard
            if ($user->isSuperAdmin()) {
                // $slugs = ListHelper::slugsWithModulAccess();

                $slugs = Cache::remember('slugs', system_cache_remember_for(), function () {
                    return ListHelper::slugsWithModulAccess();
                });

                config()->set('authSlugs', $slugs);
            }
        }

        // if (is_incevio_package_loaded('zipcode')) {
        //     $user = Auth::guard('customer')->user();

        //     if ($user instanceof Customer && $user->address) {
        //         $zipCode = $user->address->zip_code;
        //     } else {
        //         $zipCode = session('zipcode_default') ?? get_from_option_table('zipcode_default');
        //     }

        //     Session::put('zipcode_default', $zipCode);
        // }

        return $next($request);
    }

    /**
     * Set system currency information to config
     *
     * @return void
     */
    // private static function initCurrency()
    // {
    //     $currency = \DB::table('currencies')->where('id', config('system_settings.currency_id'))->first();

    //     config([
    //         'system_settings.currency' => [
    //             'name' => $currency->name,
    //             'symbol' => $currency->symbol,
    //             'iso_code' => $currency->iso_code,
    //             'symbol_first' => $currency->symbol_first,
    //             'decimal_mark' => $currency->decimal_mark,
    //             'thousands_separator' => $currency->thousands_separator,
    //             'subunit' => $currency->subunit,
    //         ]
    //     ]);

    //     return;
    // }

    private function can_load()
    {
        if (ZCART_MIX_KEY != '017bf8bc885fb37b' || md5_file(base_path() . '/bootstrap/autoload.php') != '72dc6cd343ba316c88cfd12d97ae5b3d') {
            die('Did you ' . 'remove the ' . 'old files ' . '!?');
        }

        incevioAutoloadHelpers(getMysqliConnection());
    }
}
