<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function seedPermissions($module, $access, $actions)
  {
    // Return if the module exist
    if (DB::table('modules')->where('name', $module)->first()) return;

    $now = Carbon::Now();

    // Seed module
    $module_id = DB::table('modules')->insertGetId([
      'name' => $module,
      'description' => 'Manage all packagings.',
      'access' => $access,
      'actions' =>  $actions,
      'created_at' => $now,
      'updated_at' => $now,
    ]);

    // Permissions
    $permissions = explode(',', $actions);
    foreach ($permissions as $permission) {
      // Prepare the permission slug
      $slug = strtolower($permission) . '_' . Str::snake($module);

      // Skip if the permission exist
      if (DB::table('permissions')->where('slug', $slug)->first()) continue;

      $permission_id = DB::table('permissions')->insertGetId([
        'module_id' => $module_id,
        'name' => Str::title($permission),
        'slug' => $slug,
        'created_at' => $now,
        'updated_at' => $now,
      ]);

      //
        if ($access != 'Merchant') {
            if (! DB::table('permission_role')->where([
                ['permission_id', '=', $permission_id],
                ['role_id', '=', \App\Models\Role::ADMIN],
            ])->first()) {
                DB::table('permission_role')->insert([
                    'permission_id' => $permission_id,
                    'role_id' => \App\Models\Role::ADMIN,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }

        if ($access != 'Platform') {
            if (! DB::table('permission_role')->where([
                ['permission_id', '=', $permission_id],
                ['role_id', '=', \App\Models\Role::MERCHANT],
            ])->first()) {
                DB::table('permission_role')->insert([
                    'permission_id' => $permission_id,
                    'role_id' => \App\Models\Role::MERCHANT,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }

    }
  }
}
