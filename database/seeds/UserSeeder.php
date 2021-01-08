<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert(
        [
            'username' => 'longnguyen',
            'password' => Hash::make('123'),
            'name'=>'Nguyễn Thành Long',
            'address'=>'Quảng Nam',
            'phone_number'=>'(+84) 35 7764 225'
        ]
    );
        DB::table('users')->insert(
        [
            'username' => 'ngoccute',
            'password' => Hash::make('1'),
            'name'=>'Duy Ngọc',
            'address'=>'Bình Định',
            'phone_number'=>'(+84) 33 xxxx xxx'
        ]
    );

    DB::table('users')->insert(
        [
            'username' => 'admin',
            'password' => Hash::make('123'),
            'name'=>'ADMIN',
            'address'=>'Đà Nẵng',
            'phone_number'=>'(+84) 33 xxxx xxx'
        ]
    );
    }
}