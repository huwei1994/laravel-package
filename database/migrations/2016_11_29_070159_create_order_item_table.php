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
            $table->integer('order_id', false,true)->comment('订单编号');
            $table->string('product_id', 128)->comment('商品编号');
            $table->integer('order_item_product_qty', false,true)->comment('商品数量');
            $table->float('order_item_product_price', 10, 2)->comment('商品单价');
            $table->float('order_item_product_current_amt', 10, 2)->default(0)->comment('商品应收金额(商品单价 * 商品数量)');
            $table->float('order_item_product_preferential_amt', 10, 2)->default(0)->comment('商品优惠金额');
            $table->float('order_item_product_amt', 10, 2)->default(0)->comment('商品实收金额(商品应收金额 - 商品优惠金额)');
            $table->text('order_item_product_preferential_desc')->default('')->comment('商品优惠金额说明');
            $table->text('order_item_product_express')->default('')->comment('商品运单信息(物流公司 + 运单单号等组成的唯一可识别的运单信息)');
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
