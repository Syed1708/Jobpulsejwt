<?php

namespace Database\Factories;

use App\Models\About;
use App\Models\Job;
use App\Models\JobPage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobPageFactory extends Factory
{
    
    protected $model = JobPage::class;

    public function definition(): array
    {


        return [
            'user_id' => 1,
            'banner' => $this->faker->imageUrl,
            
        ];
    }
}
