<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigSslcommerzTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('config_sslcommerz')) {
            Schema::create('config_sslcommerz', function (Blueprint $table) {
                $table->integer('shop_id')->unsigned()->index();
                $table->text('store_id')->nullable();
                $table->text('store_password')->nullable();
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
        Schema::dropIfExists('config_sslcommerz');
    }
}
