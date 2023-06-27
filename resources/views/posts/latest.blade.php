@extends('base')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold mb-8">LATEST 5 POSTS</h1>

        @if ($posts->count())
            @foreach($posts as $post)
                <div class="mb-8">
                    <h1>
                        <a href="{{ route('posts.show', $post->slug)}}" class="text-blue-500 hover:text-blue-700">
                            <!-- BLOG ID: {{$post->id}} -->
                         <h2 class="text-2xl font-bold mb-2">{{$post->id}}:{{$post->tittle}}</h2>

                        </a>
                    </h1>
                    <div>
                        <h4>
                            <a href="{{ route('posts.categories.show', $post->category->id)}}" class="text-blue-500 hover:text-blue-700">
                                Category: {{$post->category->name}}
                            </a>
                        </h4>
                        <h5>
                            <a href="authors/{{$post->author->id}}{{ route('posts.show', $post->slug)}}" class="text-blue-500 hover:text-blue-700">
                                Author: {{$post->author->name}}
                            </a>
                        </h5>
                    </div>
                    <div class="flex flex-wrap">
                        @foreach($post->tags as $tag)
                            <div class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm mr-2 mt-2">{{$tag->name}}</div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </div>
@endsection
