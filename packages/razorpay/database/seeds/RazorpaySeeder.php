<?php

namespace Incevio\Package\Razorpay\Database\Seeds;

use Carbon\Carbon;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RazorpaySeeder extends Seeder
{
    public function run()
    {
        if (DB::table('payment_methods')->where('code', 'razorpay')->first()) {
            return;
        }

        DB::table('payment_methods')->insert([
            'name' => 'Razorpay',
            'code' => 'razorpay',
            'type' => PaymentMethod::TYPE_OTHERS,
            'split_money' => false,
            'company_name' => 'Razorpay',
            'website' => 'https://razorpay.com/',
            'help_doc_link' => 'https://razorpay.com/features/',
            'description' => 'Accept Payments with Razorpay Payment Suite. <br/><strong>By using razorpay: </strong><br/>- You agree to razorpay\'s <a href="https://razorpay.com/" target="_blank">Terms of Service</a>.',
            'admin_description' => 'Accept Payments with Razorpay Payment Suite.',
            'admin_help_doc_link' => 'https://razorpay.com/partners/',
            'order' => 1,
            'enabled' => false,
            'created_at' => Carbon::Now(),
            'updated_at' => Carbon::Now(),
        ]);
    }
}
