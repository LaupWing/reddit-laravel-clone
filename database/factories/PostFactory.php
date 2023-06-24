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
      $genre = \App\Models\Genre::inRandomOrder()->first();

      return [
         "title" => fake()->name(),
         "content" => fake()->text(),
         "user_id" => $user->id,
         "genre_id" => $genre->id
      ];
   }
}
