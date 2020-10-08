<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function getAllPost() {

      $posts = Post::all();
      return response() -> json($posts);
    }

    public function getBestPost() {

      $posts = Post::where('like', '>', 1000000) -> get();
      return response() -> json($posts);
    }
}
