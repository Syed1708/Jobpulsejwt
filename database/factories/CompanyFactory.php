<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected static ?string $password;
     protected $model = Company::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('123'),
            'remember_token' => Str::random(10),
        ];
    } 

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
