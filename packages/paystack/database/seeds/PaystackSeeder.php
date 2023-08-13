<?php

namespace Incevio\Package\Paystack\Database\Seeds;

use Carbon\Carbon;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaystackSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('payment_methods')->where('code', 'paystack')->first()) {
            return;
        }

        DB::table('payment_methods')->insert([
            'name' => 'Paystack',
            'code' => 'paystack',
            'type' => PaymentMethod::TYPE_OTHERS,
            'split_money' => false,
            'company_name' => 'Paystack',
            'website' => 'https://paystack.com/',
            'help_doc_link' => 'https://paystack.helpscoutdocs.com/',
            'description' => 'Modern online and offline payments for Africa. Paystack helps businesses in Africa get paid by anyone, anywhere in the world. <br/><strong>By using Paystack: </strong><br/>- You agree to Paystack\'s <a href="https://paystack.com/terms" target="_blank">Terms of Service</a>.',
            'admin_description' => 'Modern online and offline payments for Africa. Paystack helps businesses in Africa get paid by anyone, anywhere in the world.',
            'admin_help_doc_link' => 'https://paystack.helpscoutdocs.com/',
            'order' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
