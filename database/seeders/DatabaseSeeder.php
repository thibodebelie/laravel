<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Activiteit::factory()->count(50)->create();

        $role = Role::firstOrCreate(['name' => 'leider']);

        // Maak een nieuwe admin gebruiker
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin.admin@admin.com',
            'password' => bcrypt('adminadmin'),
            // ...
        ]);

        // Wijs de rol toe aan de admin gebruiker
        $user->assignRole('leider');
    }
    
}
