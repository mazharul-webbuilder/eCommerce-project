<?php

namespace Incevio\Package\SearchAutocomplete;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'SearchAutocomplete';
    }

    public function cleanDatabase()
    {
        $package_data = DB::table(get_option_table_name())
            ->where('option_name', 'like', 'searchAutocomplete_%');

        if ($package_data->delete()) {
            Log::info("Data cleaning successful for " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED for " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
