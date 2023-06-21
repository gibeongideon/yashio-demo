@extends('base')

@section('content')
<h1>ALL POSTS</h1>

@if ($posts->count() > 0)
    @foreach($posts as $post)
        <h1>
            <a href="{{ route('postdetails', $post->slug) }}">
                BLOG ID: {{ $post->id }}
                TITLE: {{ $post->tittle }}
            </a>
        </h1>
        <div>
            <h4>
                <a href="{{ route('postsbycategory', $post->category->id) }}">
                    Category: {{ $post->category->name }}
                </a>
            </h4>
            <h5>
                <a href="{{ route('postbyauthor', $post->author->id) }}">
                    Author: {{ $post->author->name }}
                </a>
            </h5>
        </div>
        <div>
            <p>
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
    @endforeach
@else
    <p class="text-center">No posts yet. Please check back later.</p>
@endif
@endsection
