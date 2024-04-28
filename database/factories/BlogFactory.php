<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;


class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Blog::class;

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
            'category' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'tags' => $this->faker->randomElements($tags, $count = 2),
            'featured_image' => $this->faker->imageUrl,
            
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
