<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostComment>
 */
class PostCommentFactory extends Factory
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
         "comment" => fake()->text(),
         "user_id" => $user->id,
         "post_id" => $post->id
      ];
   }
}
