<?php

namespace Incevio\Package\Packaging\Database\Seeds;

use Carbon\Carbon;
use App\Helpers\PackageSeeder;
use Illuminate\Support\Facades\DB;

class PackagingsSeeder extends PackageSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed default packaging
        DB::table('packagings')->insert([
            'id' => 1,
            'shop_id' => null,
            'name' => 'Free Basic Packaging',
            'cost' => 0,
            'active' => 1,
            'created_at' => Carbon::Now(),
            'updated_at' => Carbon::Now(),
        ]);

        // Seed Permissions
        $actions = 'view,add,edit,delete';
        $this->seedPermissions('Packaging', 'Merchant', $actions);
    }
}
