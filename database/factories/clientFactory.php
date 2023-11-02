<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class clientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomcl'=> fake()->name() ,
            'adressecl'=> fake()->address(),
            'mailcl' => fake()->email(), 
            'telcl'=> fake()->phoneNumber()
        ];
    }
}
