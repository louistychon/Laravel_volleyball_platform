<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            ['src' => '1.jpg',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => '2.jpg',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => '3.jpg',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => '4.jpg',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => '5.jpg',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => '6.jpg',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => '7.jpg',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => '8.jpg',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => '9.jpg',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => '10.jpg',
            'updated_at' => now(),
            'created_at' => now()],
         ]);
    }
}
