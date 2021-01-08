<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
                'name' => 'Áo thể thao',  
                'category_id'=>'1',
                'quantity' => '1000',
                'price'=> '10000',
                'image' => 'public/wZaMBCXo1AXUasJ6oPm7anxhJC4mXn94QFwJxBB4.jpeg',
                'detail'=> 'Hàng nhập khẩu',
            ]);

            DB::table('products')->insert([
                'name' => 'Áo thể dục',  
                'category_id'=>'2',
                'quantity' => '500',
                'price'=> '20000',
                'image' => 'public/AQki9rapmsShqKjELEehuV4i3eSwKATbGua5djBW.jpeg',
                'detail'=> 'Hàng nhập khẩu',
            ]); 
            
            DB::table('products')->insert([
                'name' => 'Áo thể dục',  
                'category_id'=>'3',
                'quantity' => '600',
                'price'=> '50000',
                'image' => 'public/EWMAttxRDOyqQZaE8FrNhgGDJruOC4ZlmhK911pw.png',
                'detail'=> 'Hàng nhập khẩu',
            ]);
            
            DB::table('products')->insert([
                'name' => 'Áo thể thao',  
                'category_id'=>'1',
                'quantity' => '500',
                'price'=> '100000',
                'image' => 'public/s9u7uOD6CAZfpJJGxqq4fsUmpkTdgFsPpMeOJMD2.jpeg',
                'detail'=> 'Hàng nhập khẩu',
            ]); 
            
            DB::table('products')->insert([
                'name' => 'Áo thun nữ',  
                'category_id'=>'2',
                'quantity' => '500',
                'price'=> '20000',
                'image' => 'public/ydiFTlsJeIhvwaJgdkdHBPdCCC1JtRPqncXDYpzA.jpeg',
                'detail'=> 'Hàng nội địa',
            ]);    

            DB::table('products')->insert([
                'name' => 'Combo 2 áo thun nữ',  
                'category_id'=>'3',
                'quantity' => '100',
                'price'=> '10000',
                'image' => 'public/nLpALVrxF8rEo3Pjc3FRhA54HZQ4Qtqtw0LRKKg2.jpeg',
                'detail'=> 'Hàng nội địa',
            ]);

            DB::table('products')->insert([
                'name' => 'Áo thun nữ',  
                'category_id'=>'1',
                'quantity' => '500',
                'price'=> '20000',
                'image' => 'public/QMxyg7B8J0QjWpGi3PjyLGRD5x0Eo3DHAANpjR6v.jpeg',
                'detail'=> 'Hàng nhập khẩu',
            ]);
            
            DB::table('products')->insert([
                'name' => 'Combo 2 áo thun nữ',  
                'category_id'=>'2',
                'quantity' => '500',
                'price'=> '20000',
                'image' => 'public/x34h97w4kQWrWZnpRsOGMhUcWKpaHB9qoIHeSqmi.jpeg',
                'detail'=> 'Hàng nhập khẩu',
            ]);
            
            DB::table('products')->insert([
                'name' => 'Giày thể thao',  
                'category_id'=>'2',
                'quantity' => '500',
                'price'=> '20000',
                'image' => 'public/AdF0pAIuTmX8T1S0RzSZ6Ma9pGJzHU12I9rjRxY7.jpeg',
                'detail'=> 'Hàng nhập khẩu',
            ]);
            
            DB::table('products')->insert([
                'name' => 'Giày thể thao',  
                'category_id'=>'2',
                'quantity' => '500',
                'price'=> '20000',
                'image' => 'public/j3540x6GlODeJY31YRAvBYRnB0UXf0Py9OJabevP.jpeg',
                'detail'=> 'Hàng nhập khẩu',
            ]);

            DB::table('products')->insert([
                'name' => 'Giày thể thao',  
                'category_id'=>'2',
                'quantity' => '500',
                'price'=> '20000',
                'image' => 'public/pzlRPRpLRxySYLFIuQF1XvIQvO8cMNvI5LubDKyY.jpeg',
                'detail'=> 'Hàng nhập khẩu',
            ]);

            DB::table('products')->insert([
                'name' => 'Giày thể thao',  
                'category_id'=>'2',
                'quantity' => '500',
                'price'=> '20000',
                'image' => 'public/FOVgoVIefrOG2PBZrQi6HRGfDQ5hWqgAssOyJCzE.jpeg',
                'detail'=> 'Hàng nhập khẩu',
            ]); 
    }
}
