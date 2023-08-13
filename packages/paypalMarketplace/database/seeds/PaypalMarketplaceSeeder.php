<?php

namespace Incevio\Package\PaypalMarketplace\Database\Seeds;

use Carbon\Carbon;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaypalMarketplaceSeeder extends Seeder
{
    public function run()
    {
        if (!DB::table('payment_methods')->where('code', 'paypal-marketplace')->first()) {
            DB::table('payment_methods')->insert([
                'name' => 'Paypal Marketplace',
                'code' => 'paypal-marketplace',
                'type' => PaymentMethod::TYPE_PAYPAL,
                'split_money' => true,
                'company_name' => 'PayPal Inc.',
                'website' => 'https://paypal.com/',
                'help_doc_link' => 'https://developer.paypal.com/docs/platforms/',
                'description' => 'Accept Payments with PayPal. <br/><strong>By using PayPal: </strong><br/>- You agree to PayPal\'s <a href="https://paypal.com/" target="_blank">Terms of Service</a>.',
                'admin_description' => 'PayPal Commerce Platform is a full-stack solution that offers marketplaces and other commerce platforms powerful and flexible payment processing capabilities.',
                'admin_help_doc_link' => 'https://developer.paypal.com/docs/platforms/',
                'order' => 1,
                'enabled' => false,
                'created_at' => Carbon::Now(),
                'updated_at' => Carbon::Now(),
            ]);
        }
    }
}
