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
        DB::table('photo')->insert([
            ['src' => 'dsqkdqsjdkl',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => 'dqsdqkdkqldkj',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => 'dsqklqksdjkqls',
            'updated_at' => now(),
            'created_at' => now()],
            ['src' => 'dqskdqskldqskj', 
            'updated_at' => now(),
            'created_at' => now()],
         ]);
    }
}
