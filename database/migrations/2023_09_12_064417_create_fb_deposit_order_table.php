<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbDepositOrderTable extends Migration
{
  public function up()
  {
    Schema::create('fb_deposit_order', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('order_id')->comment('The unique order id generated by the backend');
      $table->bigInteger('partner_id')->unsigned()->comment('Id of the primary key in the "partners" table');
      $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade')->onUpdate('cascade');
      $table->double('amount')->comment('The Bitcoin or token amount to be paid');
      $table->string('product_name')->comment('The name of the product');
      $table->string('currency')->comment('The currency like BTC, USDT, etc.');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down()
  {
    Schema::dropIfExists('fb_deposit_order');
  }
}
