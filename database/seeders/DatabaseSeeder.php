<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Salsabila Aulia',
            'email' => 'auliabilaa29@gmail.com',
            'password' => bcrypt('Salsa2942'),
        ]);
        User::factory()->create([
            'name' => 'Tahu Bulat',
            'email' => 'tahubulat@gmail.com',
            'password' => bcrypt('Salsa1342'),
        ]);
    }
}
