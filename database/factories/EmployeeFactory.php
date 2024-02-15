<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => fake() -> firstName,
            'lastname' => fake() -> lastName,
            'fiscal_code' => fake() -> unique() -> numerify('############'),
            'salary' => fake() -> randomFloat(2, 1000, 3000),
        ];
    }
}
