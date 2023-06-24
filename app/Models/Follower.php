<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
   use HasFactory;

   protected $fillable = [
      "user_id",
      "genre_id"
   ];

   public function user()
   {
      return $this->belongsTo(User::class);
   }

   public function genre()
   {
      return $this->belongsTo(Genre::class);
   }
}
