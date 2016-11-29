<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建一个order（订单明细）表
        Schema::create('order_item',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('order_item_id')->comment('订单编号');
            $table->primary('order_item_id');
            $table->integer('order_id', false,true);
            $table->string('product_id', 128)->unsigned();
            $table->integer('order_item_product_qty', false,true);
            $table->float('order_item_product_price', 10, 2);
            $table->float('order_item_product_current_amt', 10, 2)->default(0);
            $table->float('order_item_product_preferential_amt', 10, 2)->default(0);
            $table->float('order_item_product_amt', 10, 2)->default(0);
            $table->text('order_item_product_preferential_desc')->default('');
            $table->text('order_item_product_express')->default('');
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
