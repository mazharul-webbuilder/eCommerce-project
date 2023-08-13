<?php

namespace Incevio\Package\Coupons;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'Coupons';
    }

    /**
     * Remove package data from the database
     *
     * @return bool
     */
    public function cleanDatabase()
    {
        if (DB::table('coupons') && DB::table('coupon_shipping_zone') && DB::table('coupon_customer') && DB::table('modules')->where('name', 'Coupon')) {
            DB::table('coupons')->delete();
            DB::table('coupon_shipping_zone')->delete();
            DB::table('coupon_customer')->delete();
            DB::table('modules')->where('name', 'Coupon')->delete();

            Log::info("Cleaning successfully done for " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED: " . $this->package);

        throw new \Exception('Package data cleaning action failed: ' . $this->package);
    }
}
