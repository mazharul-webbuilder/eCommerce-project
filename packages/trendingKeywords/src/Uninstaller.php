<?php

namespace Incevio\Package\TrendingKeywords;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'TrendingKeywords';
    }

    public function cleanDatabase()
    {
        if (DB::table(get_option_table_name())->where('option_name', 'like', 'trendingKeywords_%')->delete()) {
            Log::info("Package data cleared successfully: " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED: " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
