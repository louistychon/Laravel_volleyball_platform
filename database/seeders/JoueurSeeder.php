<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueur')->insert([
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => rand(18, 45),
                'telephone' => rand(479606831, 499999999),
                'email' => Faker::create()->email,
                'genre' => rand(0,1),
                'pays' => Faker::create()->country,
                'photo_id' => rand(1,3),
                'equipes_id' => rand(1,3),
                'updated_at' => now(),
                'created_at' => now()
            ],
        ]);
    }
}
