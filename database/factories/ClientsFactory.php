<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(6, 10),
            'email' => $this->faker->safeEmail(),
            'name' => $this->faker->name(),
            'contact' => $this->faker->numerify('####-###-####'),
            'address' => $this->faker->address()
        ];
    }
}
