<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigRazorpayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('config_razorpay')) {
            Schema::create('config_razorpay', function (Blueprint $table) {
                $table->integer('shop_id')->unsigned()->index();
                $table->text('api_key')->nullable();
                $table->text('secret')->nullable();
                $table->boolean('sandbox')->nullable()->default(True);
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
        if (Schema::hasTable('config_razorpay')) {
            Schema::dropIfExists('config_razorpay');
        }
    }
}
