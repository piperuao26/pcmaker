<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class deskComputerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'cpu' => $this->faker->randomElement(['2TB', ' 1TB', '520GB']),
            'ram' => $this->faker->randomElement(['64GB', '32GB']),
            'HDD' => $this->faker->randomElement([' 2TB', ' 1TB']),
            'graphicCard'=> $this->faker->randomElement(['Nvidia3050ti', 'Nvidia3050']),

        ];
    }

}