<?php

namespace Incevio\Package\Pharmacy;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'Pharmacy';
    }

    public function cleanDatabase()
    {
        if (DB::table(get_option_table_name())->where('option_name', 'like', 'pharmacy_%')->delete()) {
            Log::info("Cleaning successfull: " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED: " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
