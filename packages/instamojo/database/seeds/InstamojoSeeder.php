<?php

namespace Incevio\Package\Instamojo\Database\Seeds;

use Carbon\Carbon;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstamojoSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('payment_methods')->where('code', 'instamojo')->first()) {
            return;
        }

        DB::table('payment_methods')->insert([
            'name' => 'Instamojo',
            'code' => 'instamojo',
            'type' => PaymentMethod::TYPE_CREDIT_CARD,
            'split_money' => false,
            'company_name' => 'Instamojo Technologies Pvt. Ltd.',
            'website' => 'https://instamojo.com/',
            'help_doc_link' => 'https://instamojo.com/docs/checkout/tutorial',
            'description' => 'Instamojo is one of the most popular and Multi-Channel Payment Gateway for India - Accept Credit/Debit Cards, Wallets, Net Banking, UPI & EMI. <br/><strong>By using Instamojo: </strong><br/>- You have to have your Instamojo business account. <br/>- You agree to Instamojo\'s <a href="https://www.instamojo.com/terms/" target="_blank">Terms of Service</a>.',
            'admin_description' => 'Instamojo is one of the most popular and Multi-Channel Payment Gateway for India - Accept Credit/Debit Cards, Wallets, Net Banking, UPI & EMI. Enable Instamojo to your vendors.',
            'admin_help_doc_link' => 'https://www.instamojo.com/',
            'order' => 5,
            'created_at' => Carbon::Now(),
            'updated_at' => Carbon::Now(),
        ]);
    }
}
