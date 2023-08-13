<?php

namespace Incevio\Package\Razorpay;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'Razorpay';
    }

    /**
     * Remove package data from the database
     *
     * @return bool
     */
    public function cleanDatabase()
    {
        if (DB::table('payment_methods')->where('code', 'razorpay')->delete()) {
            Log::info("Cleaning successfully done for " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED: " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
