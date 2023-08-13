<?php

namespace Incevio\Package\MPesa\Database\Seeds;

use Carbon\Carbon;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MPesaSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('payment_methods')->where('code', 'mpesa')->first()) {
            return;
        }

        DB::table('payment_methods')->insert([
            'name' => 'M-Pesa',
            'code' => 'mpesa',
            'type' => PaymentMethod::TYPE_OTHERS,
            'split_money' => false,
            'company_name' => 'mpesa',
            'website' => 'https://www.safaricom.co.ke/personal/m-pesa/m-pesa-home',
            'help_doc_link' => 'https://www.safaricom.co.ke/personal/m-pesa/m-pesa-home',
            'description' => 'Accept Payments with mpesa Payment Suite. <br/><strong>By using mpesa: </strong><br/>- You agree to mpesa\'s <a href="https://www.safaricom.co.ke/personal/m-pesa/m-pesa-home" target="_blank">Terms of Service</a>.',
            'admin_description' => 'Accept Payments with mpesa Payment Suite.',
            'admin_help_doc_link' => 'https://developer.safaricom.co.ke/Documentation',
            'order' => 1,
            'enabled' => false,
            'created_at' => Carbon::Now(),
            'updated_at' => Carbon::Now(),
        ]);
    }
}
