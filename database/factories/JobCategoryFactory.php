<?php

namespace Database\Factories;


use App\Models\JobCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = JobCategory::class;

    public function definition(): array
    {
        // $companyId = $this->faker->unique()->numberBetween(1000, 10000);
        // $companyId = 1;
        // for ($i = 0; $i < 10; $i++) {
        //     JobCategory::factory()->create([
        //         'company_id' => $companyId++
        //     ]);
        // }

        return [
            'company_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
