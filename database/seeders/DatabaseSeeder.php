<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    */
   public function run(): void
   {
      \App\Models\User::factory(100)->create();
      \App\Models\Genre::factory(10)->create();

      $totalFollowers = 500;
      for($i =0; $i < $totalFollowers; $i++){
         $follower = \App\Models\Follower::factory()->make();
         
         while(\App\Models\Follower::where("user_id", $follower->user_id)->where("genre_id", $follower->genre_id)->exists()){
            $follower = \App\Models\Follower::factory()->make();
         }
         $follower->save();
      }

      // \App\Models\User::factory()->create([
      //     'name' => 'Test User',
      //     'email' => 'test@example.com',
      // ]);
   }
}
