<?php

namespace Database\Seeders;

use App\Models\Activiteit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActiviteitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activiteit::factory()->count(50)->create();

    }
}
