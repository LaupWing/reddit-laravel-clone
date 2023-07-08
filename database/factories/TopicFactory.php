<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
      return [
         "name" => fake()->unique()->word(),
         "description" => fake()->text(),
         "user_id" => function() {
            return User::inRandomOrder()->first()->id;
         },
         "profile_picture" => rand(0, 1) ? fake()->imageUrl() : null,
         "thumbnail" => rand(0, 1) ? fake()->imageUrl() : null
      ];
   }
}
