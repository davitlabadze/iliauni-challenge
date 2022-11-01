<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{

    protected PostRepositoryInterface $repository;

    public function __construct(PostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * @return object
     */
    public function posts(): object
    {
        $posts = $this->repository->getAll();
        return view('components.posts', ['posts' => $posts]);
    }


    /**
     * @param string $id
     * @return object
     */
    public function post(string $id):object
    {
        $post = $this->repository->getPost($id);
        return view('components.post', ['post' => $post]);
    }




//     /**
//      * Get Posts
//      *
//      * @return object
//      */
//     public function posts(): object
//     {
//         $posts = Post::get();
//         return view('components.posts', ['posts' => $posts]);
//     }
//
//     /**
//      * Get post
//      *
//      * @param [string] $id
//      * @return object
//      */
//     public function post($id): object
//     {
//         $post = Post::find($id);
//         return view('components.post', ['post' => $post]);
//     }
}
