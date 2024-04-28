<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Job::class;

    public function definition(): array
    {
        $tags = ['PHP', 'JS', 'Python'];
        // $companyId = 1;
        // for ($i = 0; $i < 10; $i++) {
        //     Job::factory()->create([
        //         'company_id' => $companyId++
        //     ]);
        // }

        return [
            'company_id' => $this->faker->numberBetween(1, 10),
            'category_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'mode' => $this->faker->randomElement(['Remote', 'OnSite']),
            'salary' => $this->faker->numberBetween(30000, 100000),
            'location' => $this->faker->city,
            'tags' => $this->faker->randomElements($tags, $count = 2),
            'benifits' => $this->faker->title,
            'deadline' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
