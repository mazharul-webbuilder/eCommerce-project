<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableOnSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumns('subscriptions', ['stripe_id', 'stripe_status'])) {
            Schema::table('subscriptions', function (Blueprint $table) {
                $table->string('stripe_id')->nullable()->change();
                $table->string('stripe_status')->nullable()->change();
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
        if (Schema::hasColumns('subscriptions', ['stripe_id', 'stripe_status'])) {
            Schema::table('subscriptions', function (Blueprint $table) {
                $table->dropColumn('stripe_id');
                $table->dropColumn('stripe_status');
            });
        }
    }
}
