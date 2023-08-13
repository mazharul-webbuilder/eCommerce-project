<?php

namespace Incevio\Package\Inspector\Database\Seeds;

use App\Helpers\PackageSeeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class InspectorOptionsSeeder extends PackageSeeder
{
    public function run()
    {
        $now = Carbon::Now();
        $table = get_option_table_name();
        $prefix = 'inspector_';

        $options = [
            [
                'option_name' => $prefix . 'keywords',
                'option_value' => serialize([]),
                'autoload' => true,
                'overwrite' => false
            ]
        ];

        foreach ($options as $option) {
            $common = [
                'option_value' => $option['option_value'],
                'autoload' => $option['autoload'],
                'created_at' => $now,
                'updated_at' => $now,
            ];

            if (DB::table($table)->where('option_name', $option['option_name'])->first()) {
                if ($option['overwrite']) {
                    DB::table($table)->where('option_name', $option['option_name'])->update($common);
                }
            } else {
                DB::table($table)->insert(array_merge($common, ['option_name' => $option['option_name']]));
            }
        }

        // Seed Permissions
        $actions = 'setting,view,edit,delete,approve';
        $this->seedPermissions('Inspector', 'Platform', $actions);
    }
}
