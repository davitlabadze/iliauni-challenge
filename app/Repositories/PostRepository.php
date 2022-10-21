<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{

    public function getAll(): object
    {
        return Post::get();
    }

    public function getPost($id): object
    {
        return Post::findOrFail($id);
    }
}
