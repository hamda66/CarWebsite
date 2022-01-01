<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class commentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->name(),
            'email' => $this->faker->name(),
            'Country' => $this->faker->name(),
            'Message' => $this->faker->name()
        ];
    }
}
