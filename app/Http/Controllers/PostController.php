<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Get Posts
     *
     * @return object
     */
    public function posts()
    {
        $posts = Post::get();
        return view('posts', ['posts' => $posts]);
    }
}
