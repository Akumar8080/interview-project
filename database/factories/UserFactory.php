<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'reg_number' => $this->faker->unique()->numerify('REG#####'),
            'date_of_registration' => $this->faker->date(),
            'allergy_information' => $this->faker->randomElement(['None', 'Peanuts', 'Shellfish', 'Dairy']),
            'additional_information' => $this->faker->paragraphs(3, true), // Generate 3 paragraphs as dummy text
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
