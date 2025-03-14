<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('new')->insert([
            ['title'=>'Tin 1', 'conten'=>'Nội dung 1','creat
            ['title'=>'Tin 2', 'conten'=>'Nội dung 2','creat]
        ]);
    }
}
