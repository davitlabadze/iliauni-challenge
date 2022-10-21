@extends('layouts.frontLayout')
@section('title', 'Posts')
@section('content')
<div class="container grid grid-cols-4 mx-auto ">
    @foreach($test as $test)
    <div class="p-12 mt-10 mb-10 duration-300 scale-95 rounded-lg shadow-lg hover:scale-100">
        <div class="underline">
            <h2>{{ $test['title'] }}</h2>
        </div>
        <div class="mt-4 mb-12">
            <h2>{{ substr($test['body'] ,0,50) }}...</h2>
        </div>
        <div class="fixed bottom-4">
            <a href="{{ route('data',['id'=>$test['id'],'title'=>$test['title']]) }}"
                class="p-2 mt-10 text-white bg-blue-600 rounded hover:bg-blue-700">See more</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
