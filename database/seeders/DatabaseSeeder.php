<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Verschil tussen leider en lid
        $lidRole = Role::create(['name' => 'lid']);
        $leiderRole = Role::create(['name' => 'leider']);

        // Leider handmatig aangemaakt
        $leider = User::create([
            'name' => 'Admin',
            'email' => 'admin.admin@admin.com',
            'password' => Hash::make('adminadmin'),
        ]);

        // Admin is leider, toegang tot alles ==> handmatig
        $leider->roles()->attach($leiderRole);
    }
}
