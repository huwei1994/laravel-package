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
            $table->increments('order_id')->comment('订单编号');
            $table->string('order_source', 128)->comment('订单来源');
            $table->integer('saler_id', false,true)->comment('卖家编号');
            $table->integer('buyer_id', false,true)->comment('买家编号');
            $table->integer('transport_id', false,true)->comment('运送方式编号');
            $table->integer('payment_method_id', false,true)->comment('支付方式编号');
            $table->string('order_delivery_address', 512)->comment('收货人地址');
            $table->string('order_delivery_contact', 512)->comment('收货人姓名');
            $table->string('order_delivery_phone', 512)->comment('收货人电话');
            $table->float('order_freight_current_amt', 10, 2)->default(0)->comment('订单运费应付金额');
            $table->float('order_freight_amt', 10, 2)->default(0)->comment('订单运费实付金额');
            $table->float('order_product_current_amt', 10, 2)->default(0)->comment('订单商品应付金额');
            $table->float('order_product_amt', 10, 2)->default(0)->comment('订单商品实付金额');
            $table->float('order_current_amt', 10, 2)->default(0)->comment('订单应付金额');
            $table->float('order_amt', 10, 2)->default(0)->comment('订单实付金额');
            $table->float('order_preferential_amt', 10, 2)->default(0)->comment('订单优惠金额');
            $table->text('order_preferential_desc')->default('')->comment('订单优惠说明');
            $table->float('order_refund_amt', 10, 2)->default(0)->comment('订单退款金额');
            $table->text('order_refund_desc')->default('')->comment('订单退款说明');
            $table->string('order_status', 64)->comment('订单状态');
            $table->integer('order_created_at', false,true)->comment('订单创建时间');
            $table->integer('order_modified_at', false,true)->default(0)->comment('订单修改时间');
            $table->integer('order_payed_at', false,true)->default(0)->comment('订单支付时间');
            $table->integer('order_refunded_at', false,true)->default(0)->comment('订单退款时间');
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
