<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
	/**
	 * @return Application|Factory|View
	 */
	public function data()
	{
		$response = Http::get('https://jsonplaceholder.typicode.com/posts')->collect();
		Cache::put('test', $response, now()->addMinutes(1));
		if (!Cache::get('test'))
		{
			dd('this delete');
		}
		$value = Cache::get('test');
		return view('test', ['test' => $value]);
	}
}
