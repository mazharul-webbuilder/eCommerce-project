<?php

namespace Incevio\Package\Packaging;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'packaging';
    }

    /**
     * Remove package data from the database
     *
     * @return bool
     */
    public function cleanDatabase()
    {
        if (DB::table('packagings') && DB::table('inventory_packaging')) {
            DB::table('packagings')->delete();
            DB::table('inventory_packaging')->delete();
            DB::table('modules')->where('name', 'Packaging')->delete();

            Log::info("Cleaning successfully done for " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED: " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}
