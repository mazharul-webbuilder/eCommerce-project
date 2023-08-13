<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApiKeyToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumns('users', ['api_key'])) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('api_token', 80)->nullable()->default(null)->after('verification_token');
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
        if (Schema::hasColumns('users', ['api_key'])) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('api_key');
            });
        }
    }
}
