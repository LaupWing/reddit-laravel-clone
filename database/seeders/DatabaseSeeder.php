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
      \App\Models\Topic::factory(10)->create();
      \App\Models\Post::factory(100)->create();

      $totalFollowers = 500;
      for($i =0; $i < $totalFollowers; $i++){
         $follower = \App\Models\Follower::factory()->make();
         
         while(\App\Models\Follower::where("user_id", $follower->user_id)->where("topic_id", $follower->topic_id)->exists()){
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
