<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
class BuyerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //新增买家数据
        DB::table('buyer')->insert([
            ['buyer_name'=>'测试名称1'],
            ['buyer_name'=>'测试名称2'],
            ['buyer_name'=>'测试名称3'],
            ['buyer_name'=>'测试名称4'],
            ['buyer_name'=>'测试名称5'],
            ['buyer_name'=>'测试名称6'],
            ['buyer_name'=>'测试名称7'],
            ['buyer_name'=>'测试名称8'],
            ['buyer_name'=>'测试名称9'],
            ['buyer_name'=>'测试名称10'],
            ['buyer_name'=>'测试名称11'],
            ['buyer_name'=>'测试名称12'],
            ['buyer_name'=>'测试名称13'],
            ['buyer_name'=>'测试名称14'],
        ]);
    }
}
