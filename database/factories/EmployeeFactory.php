<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, 5),
            'role' => $this->faker->sentence(2),
            'branch_id' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->name(),
            'contact' => $this->faker->numerify('####-###-####')
        ];
    }
}
