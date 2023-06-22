@extends('base')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold mb-8">ALL POSTS</h1>

    @if ($posts->count() > 0)
    @foreach($posts as $post)
    <div class="mb-8">
        <h1 class="text-2xl font-bold mb-2">
            <a href="{{ route('postdetails', $post->slug) }}" class="text-blue-500 hover:text-blue-700">
                BLOG ID: {{ $post->id }}
                TITLE: {{ $post->title }}
            </a>
        </h1>
        <div class="mb-2">
            <h4>
                <a href="{{ route('postsbycategory', $post->category->id) }}" class="text-blue-500 hover:text-blue-700">
                    Category: {{ $post->category->name }}
                </a>
            </h4>
            <h5>
                <a href="{{ route('postbyauthor', $post->author->id) }}" class="text-blue-500 hover:text-blue-700">
                    Author: {{ $post->author->name }}
                </a>
            </h5>
        </div>
        <div class="mb-2">
            <p class="text-gray-500">
                TAGS:
                @foreach($post->tags as $tag)
                {{ $tag->name }}
                @endforeach
            </p>
        </div>
        <div>
            <p>
                {{ $post->body }}
            </p>
        </div>
    </div>
    @endforeach
    @else
    <p class="text-center">No posts yet. Please check back later.</p>
    @endif
</div>
@endsection
