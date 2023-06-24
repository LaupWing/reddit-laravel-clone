<?php

namespace Database\Factories;

use App\Models\Follower;
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
      $user = User::inRandomOrder()->first();
      $genre = Genre::inRandomOrder()->first();

      while (Follower::where("user_id", $user->id)->where("genre_id", $genre->id)->exists()) {
         $user = User::inRandomOrder()->first();
         $genre = Genre::inRandomOrder()->first();
     }


      return [
         "user_id" => $user->id,
         "genre_id" => $genre->id,
      ];
   }
}
