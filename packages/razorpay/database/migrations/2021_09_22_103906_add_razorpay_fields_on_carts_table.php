<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRazorpayFieldsOnCartsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (!Schema::hasColumns('carts', ['razorpay_order_id'])) {
      Schema::table('carts', function (Blueprint $table) {
        $table->text('razorpay_order_id')->nullable()->default(Null);
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
    if (Schema::hasColumns('carts', ['razorpay_order_id'])) {
      Schema::table('carts', function (Blueprint $table) {
        $table->dropColumn('razorpay_order_id');
      });
    }
  }
}
