<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'=>'Thời trang nam',
            ],
            [
                'name'=>'Thời trang nữ',
            ],
            [
                'name'=>'Thời trang trẻ em',
            ]
        ]);
    }
}
