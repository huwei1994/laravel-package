<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //新建saler（卖家信息）表
        Schema::create('saler',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('saler_id');
            $table->primary('saler_id');
            $table->string('saler_name',128);
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
