<?php

namespace Incevio\Package\Wallet\Database\Seeds;

use App\Helpers\PackageSeeder;
use Carbon\Carbon;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;

class WalletPaymentMethodSeeder extends PackageSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            'name' => 'zCart Wallet',
            'code' => 'zcart-wallet',
            'type' => PaymentMethod::TYPE_MANUAL,
            'split_money' => true,
            'company_name' => 'Incevio',
            'description' => 'zCart wallet module is the payment method where customer could buy products via customer zCart digital wallet balance.',
            'admin_description' => 'zCart Wallet module is the payment method where customer could buy products via customer zCart digital wallet balance.',
            'admin_help_doc_link' => 'https://incevio.com/plugin/wallet',
            'order' => 8,
            'created_at' => Carbon::Now(),
            'updated_at' => Carbon::Now(),
        ]);

        // Seed Permissions
        $actions = 'setting,payout,report';
        $this->seedPermissions('Wallet', 'Platform', $actions);

    }

}
