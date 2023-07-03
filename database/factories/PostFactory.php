<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
      $user = \App\Models\User::inRandomOrder()->first();
      $topic = \App\Models\Topic::inRandomOrder()->first();

      return [
         "name" => fake()->name(),
         "content" => fake()->text(),
         "user_id" => $user->id,
         "topic_id" => $topic->id,
         "media" => rand(0, 1) ? fake()->imageUrl() : null
      ];
   }
}
