<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRazorpayFieldsOnOrdersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (!Schema::hasColumns('orders', ['razorpay_order_id', 'razorpay_payment_id', 'razorpay_signature'])) {
      Schema::table('orders', function (Blueprint $table) {
        $table->text('razorpay_order_id')->nullable()->default(Null);
        $table->text('razorpay_payment_id')->nullable()->default(Null)->after('razorpay_order_id');
        $table->text('razorpay_signature')->nullable()->default(Null)->after('razorpay_payment_id');
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
    if (Schema::hasColumns('orders', ['razorpay_order_id', 'razorpay_payment_id', 'razorpay_signature'])) {
      Schema::table('orders', function (Blueprint $table) {
        $table->dropColumn('razorpay_signature');
        $table->dropColumn('razorpay_payment_id');
        $table->dropColumn('razorpay_order_id');
      });
    }
  }
}
