<?php

namespace Incevio\Package\SearchAutocomplete\Database\Seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SearchAutocompleteOptionsSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::Now();
        $table = get_option_table_name();
        $prefix = 'searchAutocomplete_';

        $options = [
            [
                'option_name' => $prefix . 'settings',
                'option_value' => serialize([
                    'min_char' => 3,
                    'max_result' => 10,
                    'show_char' => 50
                ]),
                'autoload' => true,
                'overwrite' => true
            ], [
                'option_name' => $prefix . 'css',
                'option_value' => file_get_contents(__DIR__ . '/data/style.css'),
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
