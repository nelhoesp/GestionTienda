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

    protected static $counter = 1;

    public function definition(): array
    {
        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'birth_date' => $this->faker->dateTimeBetween('-65 years', '-18 years')->format('Y-m-d'),
            'photo' => 'EmplD' . self::$counter++ . '.pic',
            'notes' => $this->faker->sentence()
        ];
    }
}
