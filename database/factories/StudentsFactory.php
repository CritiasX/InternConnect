<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'lastname' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'middlename' => $this->faker->firstName(),
            'section' => '12A',
            'specialization' => $this->faker->randomElement(['WMAD', 'BA', 'SA']),
        ];
    }
}
