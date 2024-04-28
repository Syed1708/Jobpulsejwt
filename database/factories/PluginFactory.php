<?php

namespace Database\Factories;


use App\Models\BlogCategory;
use App\Models\JobCategory;
use App\Models\Plugin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class PluginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Plugin::class;

    public function definition(): array
    {
      

        return [
            'company_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name,
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
        
    }
}
