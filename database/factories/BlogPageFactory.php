<?php

namespace Database\Factories;

use App\Models\About;
use App\Models\BlogPage;
use App\Models\Job;
use App\Models\JobPage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class BlogPageFactory extends Factory
{
    
    protected $model = BlogPage::class;

    public function definition(): array
    {


        return [
            'user_id' => 1,
            'banner' => $this->faker->imageUrl,
            
        ];
    }
}
