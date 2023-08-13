<?php

namespace Incevio\Package\Wallet;

use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'Wallet';
    }

    public function cleanDatabase()
    {
        if (DB::table(get_option_table_name())->where('option_name', 'like', 'wallet_%')->delete()) {

            //clear permission
            DB::table('modules')->where('name', 'Wallet')->delete();

            // Clear Payment Method:
            PaymentMethod::where('code', 'zcart-wallet')->delete();

            Log::info("Cleaning successfully done for " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED: " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
