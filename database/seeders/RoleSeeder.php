<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{

    public function run()
    {
        DB::table('roles')->insert([
            [
                'nom' => 'Avant',
                'nombre' => '2',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => 'Centre',
                'nombre' => '2',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => 'Arrière',
                'nombre' => '3',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => 'Remplaçant',
                'nombre' => '3',
                'updated_at' => now(),
                'created_at' => now()
            ],
        ]);
    }
}
