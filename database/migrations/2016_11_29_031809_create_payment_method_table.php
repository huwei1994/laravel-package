<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentMethodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //新建payment_method（支付方式）表
        Schema::create('payment_method',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('payment_method_id')->comment('支付方式编号');
            $table->string('payment_method_name',128)->comment('支付方式名称');
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
