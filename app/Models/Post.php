<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   use HasFactory;

   protected $fillable = ["title", "content", "media"];

   public function topic()
   {
      return $this->belongsTo(Topic::class);
   }

   public function user()
   {
      return $this->belongsTo(User::class);
   }

   public function comments()
   {
      return $this->hasMany(PostComment::class);
   }

   public function votes()
   {
      return $this->hasMany(Vote::class)->where("up", true);
   }
}
