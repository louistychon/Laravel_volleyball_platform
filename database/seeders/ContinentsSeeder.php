<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            ['nom' => 'Afrique',
            'updated_at' => now(),
            'created_at' => now()],
            ['nom' => 'Asie',
            'updated_at' => now(),
            'created_at' => now()],
            ['nom' => 'Amérique',
            'updated_at' => now(),
            'created_at' => now()],
            ['nom' => 'Europe',
            'updated_at' => now(),
            'created_at' => now()],
            ['nom' => 'Océanie',
            'updated_at' => now(),
            'created_at' => now()],
         ]);
    }
}
