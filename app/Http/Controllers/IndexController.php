<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
      return view("index", [
         "posts" => Post::latest()->get()
      ]);
   }
}
