<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Follower>
 */
class FollowerFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
      $userIds = User::pluck('id')->toArray();
      $genreIds = Genre::pluck('id')->toArray();
      
      return [
         "user_id" => $this->faker->unique()->randomElement($userIds),
         "genre_id" => $this->faker->unique()->randomElement($genreIds),
      ];
   }
   
}