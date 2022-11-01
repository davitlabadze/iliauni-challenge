<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    /**
     * @return object
     */
    public function getAll(): object
    {
        return Post::query()->get();
    }


    /**
     * @param string $id
     * @return object
     */
    public function getPost(string $id): object
    {
        return Post::query()->findOrFail($id);
    }
}
