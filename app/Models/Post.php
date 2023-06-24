<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   use HasFactory;

   protected $fillable = ["title", "content"];

   public function genre()
   {
      return $this->belongsTo(Genre::class);
   }

   public function owner()
   {
      return $this->belongsTo(User::class);
   }
}
