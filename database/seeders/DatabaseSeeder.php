<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        
        User::create([
            'name' => 'Eliana Beltran',
            'email' => 'eliana@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Administrador');
    }
}