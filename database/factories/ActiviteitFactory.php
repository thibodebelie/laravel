<?php

namespace Database\Factories;

use App\Models\Activiteit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activiteit>
 */
class ActiviteitFactory extends Factory
{
    protected $model = Activiteit::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datum' => $this->faker->date(),
            'begin' => $this->faker->time(),
            'einde' => $this->faker->time(),
            'activiteit' => $this->faker->sentence(),
            'locatie' => $this->faker->address(),
            'groep' => $this->faker->randomElement(['Mini-Min', 'Maxi-Min', 'Tussers', 'Hoofdleiding']),
        ];    
    }
}
