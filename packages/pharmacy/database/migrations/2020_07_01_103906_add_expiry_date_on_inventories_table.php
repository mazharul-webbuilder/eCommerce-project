<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExpiryDateOnInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventories', function (Blueprint $table) {
            if (! Schema::hasColumns('inventories', ['expiry_date'])) {
                $table->date('expiry_date', 8, 2)->nullable()->default(Null)->after('available_from');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventories', function (Blueprint $table) {
            if (Schema::hasColumns('inventories', ['expiry_date'])) {
                $table->dropColumn('expiry_date');
            }
        });
    }
}
