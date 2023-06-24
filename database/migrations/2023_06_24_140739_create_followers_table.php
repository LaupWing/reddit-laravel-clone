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
      Schema::create("followers", function (Blueprint $table) {
         $table->primary(["genre_id", "user_id"]);
         $table->timestamps();
         $table->foreignIdFor(
            \App\Models\User::class,
            "user_id"
         )->constrained("users")->onDelete("cascade");
         $table->foreignIdFor(
            \App\Genre\Genre::class,
            "genre_id"
         )->constrained("genres")->onDelete("cascade");
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists("followers");
   }
};
