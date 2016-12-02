<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
class SalerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //新增卖家数据
        DB::table('saler')->insert([
            ['saler_id'=>1 , 'saler_name'=>'测试卖家1'],
            ['saler_id'=>2 , 'saler_name'=>'测试卖家2'],
            ['saler_id'=>3 , 'saler_name'=>'测试卖家3'],
            ['saler_id'=>4 , 'saler_name'=>'测试卖家4'],
            ['saler_id'=>5 , 'saler_name'=>'测试卖家5'],
            ['saler_id'=>6 , 'saler_name'=>'测试卖家6'],
            ['saler_id'=>7 , 'saler_name'=>'测试卖家7'],
            ['saler_id'=>8 , 'saler_name'=>'测试卖家8'],
            ['saler_id'=>9 , 'saler_name'=>'测试卖家9'],
            ['saler_id'=>10 , 'saler_name'=>'测试卖家10'],
            ['saler_id'=>11 , 'saler_name'=>'测试卖家11'],
            ['saler_id'=>12 , 'saler_name'=>'测试卖家12'],
            ['saler_id'=>13 , 'saler_name'=>'测试卖家13'],
        ]);
    }
}
