<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //新建transport（运送方式）表
        Schema::create('transport',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('transport_id')->comment('运送方式编号');
            $table->string('transport_name',128)->comment('运送方式名称');
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
