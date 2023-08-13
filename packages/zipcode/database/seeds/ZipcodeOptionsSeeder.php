<?php

namespace Incevio\Package\Zipcode\Database\Seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Incevio\Package\Wallet\Models\Zipcode;


class ZipcodeOptionsSeeder extends Seeder
{
    public function run()
    {
        if (!DB::table('zipcodes')->first()) {
            $path = base_path('packages/zipcode/zipcodes.json');
            $zipcodes = File::get($path);
            $data = json_decode($zipcodes);

            array_map(function ($item) {
                $arrayData = get_object_vars($item);
                unset($arrayData['id']);
                DB::table('zipcodes')->insert($arrayData);
            }, $data);
        }

        $now = Carbon::Now();
        $table = get_option_table_name();
        $prefix = 'zipcode_';

        $options = [
            [
                'option_name' => $prefix . 'default',
                'option_value' => 90210,
                'autoload' => true,
                'overwrite' => true
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
    }
}
