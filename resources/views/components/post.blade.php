@extends('layouts.frontLayout');
@section('title', 'Post')
@section('content')
<div class="container mx-auto">
    <section>
        <a href="{{ route('posts') }}" class="bg-blue-600 hover:bg-blue-700 rounded p-2 mt-10  text-white">Go Back</a>

        <header class="underline mt-20 text-center">
            <h2 class="text-4xl">{{ $post->title }}</h2>
        </header>
        <div class="mt-4 mb-12 text-center">
            <h2>{{ $post->body }}</h2>
        </div>
    </section>
</div>
@endsection
