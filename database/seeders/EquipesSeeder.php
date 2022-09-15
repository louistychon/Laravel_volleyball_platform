<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class EquipesSeeder extends Seeder
{

    public function run()
    {
        DB::table('equipes')->insert([
            ['nom' => Faker::create()->domainWord,
            'ville' => Faker::create()->city,
            'pays' => Faker::create()->country,
            'continents_id' => rand(1,5),
            'updated_at' => now(),
            'created_at' => now()],
            ['nom' => Faker::create()->domainWord,
            'ville' => Faker::create()->city,
            'pays' => Faker::create()->country,
            'continents_id' => rand(1,5),
            'updated_at' => now(),
            'created_at' => now()],
            ['nom' => Faker::create()->domainWord,
            'ville' => Faker::create()->city,
            'pays' => Faker::create()->country,
            'continents_id' => rand(1,5),
            'updated_at' => now(),
            'created_at' => now()],
            ['nom' => Faker::create()->domainWord,
            'ville' => Faker::create()->city,
            'pays' => Faker::create()->country,
            'continents_id' => rand(1,5),
            'updated_at' => now(),
            'created_at' => now()],
            ['nom' => Faker::create()->domainWord,
            'ville' => Faker::create()->city,
            'pays' => Faker::create()->country,
            'continents_id' => rand(1,5),
            'updated_at' => now(),
            'created_at' => now()],
            ['nom' => Faker::create()->domainWord,
            'ville' => Faker::create()->city,
            'pays' => Faker::create()->country,
            'continents_id' => rand(1,5),
            'updated_at' => now(),
            'created_at' => now()],
        ]);
    }
}
