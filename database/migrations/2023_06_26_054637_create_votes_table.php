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
      Schema::create("votes", function (Blueprint $table) {
         $table->primary(["topic_id", "user_id"]);
         $table->timestamps();
         $table->foreignIdFor(
            \App\Models\User::class,
            "user_id"
         )->constrained("users")->onDelete("cascade");
         $table->foreignIdFor(
            \App\Models\Topic::class,
            "topic_id"
         )->constrained("topics")->onDelete("cascade");
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists("votes");
   }
};
