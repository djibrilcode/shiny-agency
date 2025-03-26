<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\article>
 */
class articleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'designation'=>$this->faker->randomElement(
                ['Smartphone Android',
                'Ordinateur portable',
                'Écouteurs Bluetooth',
                'Souris ergonomique',
                'Clavier mécanique',
                'Chargeur universel',
                'Enceinte portable',
                'Téléviseur LED 4K',
                'Disque dur externe 1 To',
                'Powerbank 10 000 mAh',]

            ),
            'prix_HT' => $this->faker->randomFloat(2, 10, 500),
            'tva' => $this->faker->numberBetween(20, 20),
            'stock' => $this->faker->numberBetween(50,1000)
        ];
    }
}
