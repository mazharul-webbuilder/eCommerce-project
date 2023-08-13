<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazorpayWalletTransectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('razorpay_wallet_transection')) {
            Schema::create('razorpay_wallet_transection', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('amount');
                $table->text('razorpay_order_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('razorpay_wallet_transection')) {
            Schema::dropIfExists('razorpay_wallet_transection');
        }
    }
}
