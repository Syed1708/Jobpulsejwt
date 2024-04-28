<?php

namespace Database\Factories;

use App\Models\About;
use App\Models\ContactPage;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class ContactPageFactory extends Factory
{
    
    protected $model = ContactPage::class;

    public function definition(): array
    {

 
        return [ 
            'user_id' => 1,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => fake()->unique()->safeEmail(),
            'banner' => $this->faker->imageUrl,
            
        ];
    }
}
