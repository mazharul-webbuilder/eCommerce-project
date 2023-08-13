<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('events')) {
            Schema::create('events', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('slug', 200)->unique();
                $table->text('description')->nullable();
                $table->string('venue')->nullable();
                $table->string('map_link')->nullable();
                $table->integer('shop_id')->unsigned()->nullable();
                $table->timestamp('starts')->nullable();
                $table->timestamp('ends')->nullable();
                $table->tinyInteger('status')->default(1);
                $table->boolean('public')->nullable()->default(True);
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('customer_event')) {
            Schema::create('customer_event', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('event_id');
                $table->unsignedBigInteger('customer_id');
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
        Schema::dropIfExists('events');
        Schema::dropIfExists('customer_event');
    }
}
