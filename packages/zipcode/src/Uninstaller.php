<?php

namespace Incevio\Package\Zipcode;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'Zipcode';
    }

    public function cleanDatabase()
    {
        if (DB::table(get_option_table_name())->where('option_name', 'like', 'zipcode_%')->delete()) {
            Log::info("Cleaning successfully done for " . $this->package);

            Session::forget('zipcode_default');

            return true;
        }

        Log::info("Cleaning FAILED: " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
