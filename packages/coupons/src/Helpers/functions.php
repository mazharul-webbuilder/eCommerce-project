<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('generateCouponCode')) {
    function generateCouponCode()
    {
        $unique = true;
        $size = config('system_settings.coupon_code_size');

        do {
            $code = generateUniqueSrt($size);

            $check = DB::table('coupons')->where('code', $code)->first();

            if ($check) {
                $unique = false;
            }
        } while (!$unique);

        return $code;
    }
}