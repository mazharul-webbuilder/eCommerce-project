<?php

namespace Incevio\Package\Flashdeal;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'Flashdeal';
    }

    public function cleanDatabase()
    {
        if (DB::table(get_option_table_name())->where('option_name', 'like', 'flashdeal_%')->delete()) {

            DB::table('modules')->where('name', 'Flash Deal')->delete();

            Log::info("Package data cleared successfully: " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED: " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
