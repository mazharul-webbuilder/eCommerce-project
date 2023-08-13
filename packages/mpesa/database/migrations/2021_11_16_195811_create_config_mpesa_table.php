<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigMPesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('config_mpesa')) {
            Schema::create('config_mpesa', function (Blueprint $table) {
                $table->integer('shop_id')->unsigned()->index();
                $table->string('consumer_key')->nullable();
                $table->string('consumer_secret')->nullable();
                $table->string('short_code')->nullable();
                $table->string('mpesa_passkey')->nullable();
                $table->string('lipa_na_mpesa')->nullable();
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
        Schema::dropIfExists('config_mpesa');
    }
}
