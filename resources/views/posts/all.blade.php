@extends('base')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold mb-8">ALL POSTS</h1>

    @if ($posts->count() > 0)
    @foreach($posts as $post)
    <div class="mb-8">
        <h1 class="text-2xl font-bold mb-2">
            <a href="{{ route('posts.show', $post->slug) }}" class="text-blue-500 hover:text-blue-700">
                BLOG ID: {{ $post->id }}
                TITLE: {{ $post->tittle }}
            </a>
        </h1>
        <div class="mb-2">
            <h4>
                <a href="{{ route('posts.categories.show', $post->category->id) }}" class="text-blue-500 hover:text-blue-700">
                    Category: {{ $post->category->name }}
                </a>
            </h4>
            <h5>
                <a href="{{ route('posts.author.show', $post->author->id) }}" class="text-blue-500 hover:text-blue-700">
                    Author: {{ $post->author->name }}
                </a>
            </h5>
        </div>
        <div class="mb-2">
            <p class="text-gray-500">
                TAGS:
                @foreach($post->tags as $tag)
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $tag->name }}</span>
                @endforeach
            </p>
        </div>
        <!-- <div>
            <p>
                {{ $post->body }}
            </p>
        </div> -->
    </div>
    @endforeach
    @else
    <p class="text-center">No posts yet. Please check back later.</p>
    @endif
</div>
@endsection
