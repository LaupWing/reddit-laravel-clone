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
      

      $this->createUniqueJunction(500, \App\Models\Follower::class);
      $this->createUniqueJunction(500, \App\Models\PostFavorite::class);
      $this->createUniqueJunction(500, \App\Models\Vote::class);

      // \App\Models\User::factory()->create([
      //     'name' => 'Test User',
      //     'email' => 'test@example.com',
      // ]);
   }

   public function createUniqueJunction($amount, $model_blueprint){
      for($i =0; $i < $amount; $i++){
         $model = $model_blueprint::factory()->make();
         
         while($model_blueprint::where("user_id", $model->user_id)->where("topic_id", $model->topic_id)->exists()){
            $model = $model_blueprint::factory()->make();
         }
         $model->save();
      }
   }
}
