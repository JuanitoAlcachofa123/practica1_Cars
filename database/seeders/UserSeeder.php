<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alex Chavez',
            'email' => 'alex@gmail.com',
            'password' => bcrypt('alex123'),
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Marva Caceres',
            'email' => 'marva@gmail.com',
            'password' => bcrypt('marva123'),
        ])->assignRole('Administrador');

        User::factory(20)->create();
        
    }
}
