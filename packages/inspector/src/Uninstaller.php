<?php

namespace Incevio\Package\Inspector;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'Inspector';
    }

    public function cleanDatabase()
    {
        if (DB::table(get_option_table_name())->where('option_name', 'like', 'inspector_%')->delete()) {
            //clear permission
            DB::table('modules')->where('name', 'Inspector')->delete();

            Log::info("Cleaning successfull: " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED: " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
