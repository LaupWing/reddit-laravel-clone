<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
   use HasFactory;

   protected $fillable = ["title", "description"];

   public function followers(){
      return $this->belongsToMany(Follower::class);
   }

   public function owner(){
      return $this->belongsTo(User::class);
   }
}
