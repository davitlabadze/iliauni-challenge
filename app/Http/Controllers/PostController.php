<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Get Posts
     *
     * @return object
     */
    public function posts(): object
    {
        $posts = Post::get();
        return view('components.posts', ['posts' => $posts]);
    }

    /**
     * Get post
     *
     * @param [string] $id
     * @return object
     */
    public function post($id): object
    {
        $post = Post::find($id);
        return view('components.post', ['post' => $post]);
    }
}
