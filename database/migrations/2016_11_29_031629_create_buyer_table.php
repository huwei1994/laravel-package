<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //新建buyer（买家）表
        Schema::create('buyer',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('buyer_id')->comment('买家编号');
            $table->string('buyer_name',128)->comment('买家名称');
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
