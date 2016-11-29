<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //新增支付方式数据
        DB::table('payment_method')->insert([
            ['payment_method_name'=>'支付宝'],
            ['payment_method_name'=>'微信支付'],
        ]);
    }
}
