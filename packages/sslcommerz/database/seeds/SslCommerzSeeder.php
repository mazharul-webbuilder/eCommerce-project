<?php

namespace Incevio\Package\SslCommerz\Database\Seeds;

use Carbon\Carbon;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SslCommerzSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('payment_methods')->where('code', 'sslcommerz')->first()) {
            return;
        }

        DB::table('payment_methods')->insert([
            'name' => 'SslCommerz',
            'code' => 'sslcommerz',
            'type' => PaymentMethod::TYPE_OTHERS,
            'split_money' => false,
            'company_name' => 'SslCommerz',
            'website' => 'https://www.sslcommerz.com/',
            'help_doc_link' => 'https://developer.sslcommerz.com/doc/v4/',
            'description' => 'SSLCOMMERZ allows its users to simplify the payment process. The consumers can easily make payments for the goods purchased and services rendered. <br/><strong>By using SSLCOMMERZ: </strong><br/>- You agree to SSLCOMMERZ\'s <a href="https://www.sslcommerz.com/" target="_blank">Terms of Service</a>.',
            'admin_description' => 'SSLCOMMERZ allows its users to simplify the payment process. The consumers can easily make payments for the goods purchased and services rendered.',
            'admin_help_doc_link' => 'https://developer.sslcommerz.com/doc/v4/',
            'order' => 1,
            'enabled' => false,
            'created_at' => Carbon::Now(),
            'updated_at' => Carbon::Now(),
        ]);
    }
}
