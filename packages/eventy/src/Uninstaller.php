<?php

namespace Incevio\Package\Eventy;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Facades\Artisan;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'Eventy';
    }

    public function cleanDatabase()
    {
        // if (DB::table(get_option_table_name())->where('option_name', 'like', 'eventy_%')->delete()) {
        //     Log::info("Cleaning successfull: " . $this->package);

        //     return true;
        // }

        // Log::info("Cleaning FAILED: " . $this->package);

        // throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
