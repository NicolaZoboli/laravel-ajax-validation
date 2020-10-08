<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

      return view('post-index');
    }

    public function create() {

      return view('post-create');
    }

    public function store(Request $request) {

      // $data = $request -> all();
      $data = $request -> validate([
        'title' => 'required|min:3|max:15',
        'body' => 'required|min:10',
        'like' => 'required|gte:0',
        'dislike' => 'required|gte:0',
        'tag' => 'required|min:3'
      ]);
      $post = Post::create($data);

      return redirect() -> route('post.index');
    }
}
