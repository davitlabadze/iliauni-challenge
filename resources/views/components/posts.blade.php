@extends('layouts.frontLayout')
@section('title', 'Posts')
@section('content')
<div class="container  mx-auto grid grid-cols-4 ">
    @foreach($posts as $post)
    <div class=" p-12 mt-10 rounded-lg mb-10 duration-300 scale-95 hover:scale-100 shadow-lg">
        <div class="underline">
            <h2>{{ $post->title }}</h2>
        </div>
        <div class="mt-4 mb-12">
            <h2>{{ substr($post->body ,0,50) }}...</h2>
        </div>
        <div class="bottom-4 fixed">
            <button class="bg-blue-600 hover:bg-blue-700 rounded p-2 mt-10  text-white">See more</button>
        </div>
    </div>
    @endforeach
</div>
@endsection
