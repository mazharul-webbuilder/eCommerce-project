<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\Schema;

class CreateZipcodeTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('zipcodes')) {
            Schema::create('zipcodes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('country_id');
                $table->integer('state_id');
                $table->string('city', 200)->nullable();
                // $table->string('zip', 20)->nullable();
                $table->longText('zip')->nullable();
                $table->decimal('lat', 10, 6)->nullable();
                $table->decimal('lng', 10, 6)->nullable();
                $table->string('timezone', 200)->nullable();
                $table->tinyInteger('daylight_savings')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('zipcodes');
    }
}
