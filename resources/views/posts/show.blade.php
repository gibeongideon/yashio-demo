@extends('base')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 shadow-md rounded-md">
        <div class="mb-4">
            <h2 class="text-2xl font-semibold">Blog Title: {{$post->tittle}}</h2>
            <h5 class="text-2xl font-semibold">Blog ID: {{$post->id}} - Slug: {{$post->slug}}</h5>
        </div>

        <div>
            <p class="text-gray-800">
                {{$post->body}}
            </p>
        </div>

        <div class="mb-4">
            <h6 class="text-gray-700 font-medium">Tags:</h6>
            <div class="flex flex-wrap">
                @foreach($post->tags as $tag)
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm mr-2 mt-2">{{$tag->name}}</button>
                @endforeach
            </div>
        </div>
    </div>
@endsection
