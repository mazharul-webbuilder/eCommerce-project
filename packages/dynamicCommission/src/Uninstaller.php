<?php

namespace Incevio\Package\DynamicCommission;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'Dynamic commissions';
    }

    public function cleanDatabase()
    {
        $package_data = DB::table(get_option_table_name())
            ->where('option_name', 'like', 'dynamicCommission_%');

        if ($package_data->delete() && DB::table('modules')->where('name', 'Dynamic Commission')->delete()) {
            Log::info("Data cleaning successful for " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED for " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
