<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigFlutterWaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('config_flutterwave')) {
            Schema::create('config_flutterwave', function (Blueprint $table) {
                $table->integer('shop_id')->unsigned()->index();
                $table->text('pub_key')->nullable();
                $table->text('sec_key')->nullable();
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
        if (Schema::hasTable('config_flutterwave')) {
            Schema::dropIfExists('config_flutterwave');
        }
    }
}
