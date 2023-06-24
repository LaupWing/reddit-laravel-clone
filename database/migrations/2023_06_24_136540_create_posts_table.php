<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
    * Run the migrations.
    */
   public function up(): void
   {
      Schema::create("posts", function (Blueprint $table) {
         $table->id();
         $table->timestamps();
         $table->foreignIdFor(
            \App\Models\Genre::class,
            "genre_id"
         )->constrained("genres")->onDelete("cascade");
         $table->foreignIdFor(
            \App\Models\User::class,
            "user_id"
         )->constrained("users")->onDelete("cascade");
         $table->text("content");
         $table->string("name");
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists("posts");
   }
};
