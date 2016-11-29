<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建一个order（订单信息）表
        Schema::create('order',function(Blueprint $table){

            /*Schema::table('order', function ($table) {
                $table->string('email');
            });*/
            $table->engine = 'InnoDB';
            $table->increments('order_id')->comment('my comment');
            $table->primary('order_id');
            $table->string('order_source', 128);
            $table->integer('saler_id', false,true);
            $table->integer('buyer_id', false,true);
            $table->integer('transport_id', false,true);
            $table->integer('payment_method_id', false,true);
            $table->string('order_delivery_address', 512);
            $table->string('order_delivery_contact', 512);
            $table->string('order_delivery_phone', 512);
            $table->float('order_freight_current_amt', 10, 2)->default(0);
            $table->float('order_freight_amt', 10, 2)->default(0);
            $table->float('order_product_current_amt', 10, 2)->default(0);
            $table->float('order_product_amt', 10, 2)->default(0);
            $table->float('order_current_amt', 10, 2)->default(0);
            $table->float('order_amt', 10, 2)->default(0);
            $table->float('order_preferential_amt', 10, 2)->default(0);
            $table->text('order_preferential_desc')->default('');
            $table->float('order_refund_amt', 10, 2)->default(0);
            $table->text('order_refund_desc')->default('');
            $table->string('order_status', 64);
            $table->integer('order_created_at', false,true);
            $table->integer('order_modified_at', false,true)->default(0);
            $table->integer('order_payed_at', false,true)->default(0);
            $table->integer('order_refunded_at', false,true)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
