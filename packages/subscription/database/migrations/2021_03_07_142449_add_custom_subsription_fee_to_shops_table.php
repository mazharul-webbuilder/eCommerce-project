<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomSubsriptionFeeToShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumns('shops', ['custom_subscription_fee'])) {
            Schema::table('shops', function (Blueprint $table) {
                $table->decimal('custom_subscription_fee', 8, 2)->nullable()->default(Null)->after('trial_ends_at');
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
        if (Schema::hasColumns('shops', ['custom_subscription_fee'])) {
            Schema::table('shops', function (Blueprint $table) {
                $table->dropColumn('custom_subscription_fee');
            });
        }
    }
}
