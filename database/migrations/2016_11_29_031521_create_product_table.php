<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建一个product（商品信息）表
        Schema::create('product',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('product_id')->comment('商品编号');
            $table->string('product_name', 128)->comment('商品名称');
            $table->string('product_preview', 256)->comment('商品图片');
            $table->float('product_original_price', 10, 2)->comment('商品原价');
            $table->float('product_sale_price', 10, 2)->comment('商品应收价');
            $table->float('product_price', 10, 2)->comment('商品实收价');
            $table->integer('saler_id',false,true)->comment('卖家编号');
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
