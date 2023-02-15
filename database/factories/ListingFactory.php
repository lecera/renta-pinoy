<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'category' => $this->faker->sentence(),
            'price' => '21,000.00',
            'contact_number' => $this->faker->phoneNumber(),
            'condition' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'address' => $this->faker->address(),
        ];
    }
}
