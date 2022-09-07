<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->Address(),
            'qty' => $this->faker->numberBetween(1, 100),
            'branch_id' => $this->faker->numberBetween(1, 7),
            'category_id' => $this->faker->numberBetween(1, 4),
        ];
    }
}
