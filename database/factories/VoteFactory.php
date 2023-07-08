<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
      $user = \App\Models\User::inRandomOrder()->first();
      $post = \App\Models\Post::inRandomOrder()->first();

      return [
         "user_id" => $user->id,
         "post_id" => $post->id,
         "up" => rand(1, 100) <= 20 ? true : false
      ];
   }
}
