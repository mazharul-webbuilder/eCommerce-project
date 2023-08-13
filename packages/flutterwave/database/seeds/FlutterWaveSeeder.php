<?php

namespace Incevio\Package\FlutterWave\Database\Seeds;

use Carbon\Carbon;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlutterWaveSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('payment_methods')->where('code', 'flutterwave')->first()) {
            return;
        }

        DB::table('payment_methods')->insert([
            'name' => 'FlutterWave',
            'code' => 'flutterwave',
            'type' => PaymentMethod::TYPE_OTHERS,
            'split_money' => false,
            'company_name' => 'FlutterWave',
            'website' => 'https://www.flutterwave.com/',
            'help_doc_link' => 'https://developer.flutterwave.com/',
            'description' => 'FLUTTERWAVE allows its users to simplify the payment process. The consumers can easily make payments for the goods purchased and services rendered. <br/><strong>By using FLUTTERWAVE: </strong><br/>- You agree to FLUTTERWAVE\'s <a href="https://www.flutterwave.com/" target="_blank">Terms of Service</a>.',
            'admin_description' => 'FLUTTERWAVE allows its users to simplify the payment process. The consumers can easily make payments for the goods purchased and services rendered.',
            'admin_help_doc_link' => 'https://developer.flutterwave.com/',
            'order' => 1,
            'enabled' => false,
            'created_at' => Carbon::Now(),
            'updated_at' => Carbon::Now(),
        ]);
    }
}
