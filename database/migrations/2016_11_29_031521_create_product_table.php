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
            $table->increments('product_id');
            $table->primary('product_id');
            $table->string('product_name', 128);
            $table->string('product_preview', 256);
            $table->decimal('product_original_price', 10, 2);
            $table->decimal('product_sale_price', 10, 2);
            $table->decimal('product_price', 10, 2);
            $table->integer('saler_id')->unsigned();
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
