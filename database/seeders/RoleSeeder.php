<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{

    public function run()
    {
        DB::table('role')->insert([
            [
                'nom' => 'Avant',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => 'Centre',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => 'Arrière',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'nom' => 'Remplaçant',
                'updated_at' => now(),
                'created_at' => now()
            ],
        ]);
    }
}
