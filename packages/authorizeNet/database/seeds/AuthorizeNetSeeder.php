<?php

namespace Incevio\Package\AutorizeNet\Database\Seeds;

use Carbon\Carbon;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorizeNetSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('payment_methods')->where('code', 'authorizenet')->first()) {
            return;
        }

        DB::table('payment_methods')->insert([
            'name' => 'Authorize.Net',
            'code' => 'authorizenet',
            'type' => PaymentMethod::TYPE_CREDIT_CARD,
            'split_money' => false,
            'company_name' => 'Authorize.Net',
            'website' => 'https://www.authorize.net/',
            'help_doc_link' => 'https://www.authorize.net/support/',
            'description' => 'More solutions for your business. More support when you need it. More strength to stand on. <br/><strong>By using Authorize.Net: </strong><br/>- You have to have an Authorize.Net account. <br/>- You agree to Authorize.Net\'s <a href="https://www.authorize.net/about-us/terms/" target="_blank">Terms of Use</a>.',
            'admin_description' => 'Authorize.Net helps makes it simple to accept electronic and credit card payments.',
            'admin_help_doc_link' => 'https://www.authorize.net/about-us/',
            'order' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
