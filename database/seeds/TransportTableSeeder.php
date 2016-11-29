<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
class TransportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //新增运送方式数据
        DB::table('transport')->insert([
            ['transport_name'=>'中通'],
            ['transport_name'=>'圆通'],
            ['transport_name'=>'天天通'],
            ['transport_name'=>'顺丰'],
        ]);
    }
}
