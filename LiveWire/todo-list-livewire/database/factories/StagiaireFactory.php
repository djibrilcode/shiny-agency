<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stagiaire>
 */
class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cef'=>$this->faker->numberBetween($min = 1000, $max = 9000),
            'nom'=>$this->faker->lastName(),
            'prenom'=>$this->faker->firstName(),
            'adresse'=>$this->faker->streetName(),
            'ville'=>$this->faker->city(),
            'filiere_id'=>$this->faker->numberBetween($min = 1, $max = 5)
        ];
    }
}
