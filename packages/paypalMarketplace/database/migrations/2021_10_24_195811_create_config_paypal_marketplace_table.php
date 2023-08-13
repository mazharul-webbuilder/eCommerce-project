<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigPaypalMarketplaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('config_paypal_marketplace')) {
            Schema::create('config_paypal_marketplace', function (Blueprint $table) {
                $table->integer('shop_id')->unsigned()->index();
                $table->string('merchant_id')->nullable();
                $table->string('account_email')->nullable();
                $table->timestamps();

                $table->primary('shop_id');
                $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
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
        Schema::dropIfExists('config_paypal_marketplace');
    }
}
