<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepositoryInterface;

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
	 *
	 * @return object
	 */
	public function post(string $id): object
	{
		$post = $this->repository->getPost($id);
		return view('components.post', ['post' => $post]);
	}
}
