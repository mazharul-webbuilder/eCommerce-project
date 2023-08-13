<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSslOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ssl_orders')) {
            Schema::create('ssl_orders', function (Blueprint $table) {
                $table->id();

                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->double('amount')->nullable();
                $table->longText('address')->nullable();
                $table->string('status')->nullable();
                $table->string('transaction_id')->nullable();
                $table->string('currency')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('ssl_orders');
    }
}
