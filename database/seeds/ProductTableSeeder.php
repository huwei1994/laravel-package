<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //向商品表里面插入数据
        DB::table('product')->insert([
            ['product_name'=>'ThinkPad E570 20H5A00TCD第7代新品高清大屏商务游戏笔记本电脑','product_preview'=>'https://img.alicdn.com/bao/uploaded/i2/TB1NjMROXXXXXc7apXXXXXXXXXX_!!0-item_pic.jpg_60x60q90.jpg','product_original_price'=>'6799.00','product_sale_price'=>'5999.00','product_price'=>'5500.00','saler_id'=>'1'],
            ['product_name'=>'联想ThinkPad E4- I3 i5 E450 E550固态游戏商务办公笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i1/2869076578/TB2beLiXqm5V1BjSspjXXcGFpXa_!!2869076578.jpg_60x60q90.jpg','product_original_price'=>'4999.00','product_sale_price'=>'2399.00','product_price'=>'2200.00','saler_id'=>'2'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4500.00','saler_id'=>'3'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'4'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'9'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'1'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'5'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'3'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'4'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'7'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'2'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'2'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'1'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'1'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'1'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'3'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'5'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'4'],
            ['product_name'=>'ThinkPad E560 20EVA0-50CD IPS高分屏 i5可双硬盘联想笔记本电脑','product_preview'=>'https://img.alicdn.com/imgextra/i4/2836116599/TB2sJLyppXXXXaQXXXXXXXXXXXX_!!2836116599.jpg_60x60q90.jpg','product_original_price'=>'4899.00','product_sale_price'=>'4699.00','product_price'=>'4600.00','saler_id'=>'10'],
        ]);
    }
}
