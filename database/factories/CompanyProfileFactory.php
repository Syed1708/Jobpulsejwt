<?php

namespace Database\Factories;

use App\Models\CompanyProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyProfile>
 */

 
class CompanyProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = CompanyProfile::class;

    public function definition(): array
    {
        return [
            'company_id' => $this->faker->unique()->numberBetween(1, 10),
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'logo' => $this->faker->imageUrl(200,200),
            'email' => $this->faker->unique()->safeEmail,
            'mobile' => $this->faker->phoneNumber(),
        ];
    }
}
