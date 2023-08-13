<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Incevio\Package\Packaging\Models\Packaging;

if (!function_exists('get_formated_dimension')) {
    function get_formated_dimension($packaging)
    {
        $dimension = get_formated_decimal($packaging->width) . ' x ' . get_formated_decimal($packaging->height);

        if ($packaging->depth && $packaging->depth > 0) {
            $dimension .= ' x ' . get_formated_decimal($packaging->depth);
        }

        return $dimension . ' ' . config('system_settings.length_unit');
    }
}

if (!function_exists('getPlatformDefaultPackaging')) {
    /**
     * Return default packaging ID for given shop
     */
    function getPlatformDefaultPackaging()
    {
        return DB::table('packagings')->select('id', 'name', 'cost')
            ->whereNull('shop_id')->where('id', Packaging::FREE_PACKAGING_ID)->first();
    }
}

if (!function_exists('getDefaultPackaging')) {
    /**
     * Return default packaging ID for given shop
     *
     * @param $int shop
     */
    function getDefaultPackaging($shop = null)
    {
        $shop = $shop ?? Auth::user()->merchantId();

        $packaging = DB::table('packagings')
            ->select('id', 'name', 'cost')
            ->where([
                ['shop_id', '=', $shop],
                ['default', '=', '1'],
                ['active', '=', '1'],
            ])
            ->whereNull('deleted_at')->first();

        if ($packaging) {
            return $packaging;
        }

        return getPlatformDefaultPackaging();
    }
}

if (!function_exists('getPackagings')) {
    /**
     * Return Packaging options for perticulater shop
     *
     * @param $int shop
     */
    function getPackagings($shop = null)
    {
        $shop = $shop ?? Auth::user()->merchantId();

        return DB::table('packagings')->select('id', 'name', 'cost')
            ->where([
                ['shop_id', '=', $shop],
                ['active', '=', '1'],
            ])
            ->whereNull('deleted_at')->get();
    }
}

if (!function_exists('getPackagingCost')) {
    /**
     * Return packaging Cost for the given id
     *
     * @param $int packaging
     */
    function getPackagingCost($packaging = null)
    {
        if (!$packaging) {
            return null;
        }

        $packaging = DB::table('packagings')->select('cost')
            ->where('id', $packaging)
            ->first();

        return $packaging ? $packaging->cost : null;
    }
}
