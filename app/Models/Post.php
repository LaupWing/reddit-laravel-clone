<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   use HasFactory;

   protected $fillable = ["title", "content"];

   public function topic()
   {
      return $this->belongsTo(Topic::class);
   }

   public function owner()
   {
      return $this->belongsTo(User::class);
   }
}
