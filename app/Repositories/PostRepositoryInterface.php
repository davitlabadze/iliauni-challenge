<?php

namespace App\Repositories;

interface PostRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getAll(): mixed;

    /**
     * @param string $id
     * @return mixed
     */
    public function getPost(string $id): mixed;
}
