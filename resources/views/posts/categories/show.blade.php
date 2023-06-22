@extends('base')

@section('content')
    <h3 class="text-2xl font-bold"> {{$posts->count()}} POSTS! in Category:{{$category->name}}</h3>

    @if ($posts->count())
        @foreach($posts as $post)
            <h1 class="text-3xl font-bold mt-4">
                <a href="{{route('posts.show',$post->slug) }}" class="text-blue-500 hover:text-blue-700">
                    BLOG ID: {{$post->id}}
                    TITTLE:{{$post->tittle}}
                </a>
            </h1>
            <div class="mt-2">
                <h4 class="text-lg font-semibold">
                    <a href="{{route('posts.categories.show',$post->category) }}" class="text-green-500 hover:text-green-700">
                        Category:{{$post->category->name}}
                    </a>
                </h4>
                <h5>
                    <a href="categories/{{$post->category->id}}" class="text-purple-500 hover:text-purple-700">
                        <!-- Add your content here -->
                    </a>
                </h5>   
            <h5>
                <a href="authors/{{$post->author->id}}{{ route('posts.show', $post->slug)}}" class="text-blue-500 hover:text-blue-700">
                    Author: {{$post->author->name}}
                </a>
            </h5>         
            </div>
            <div class="mt-2">
                <p>
                    {{$post->body}}
                </p>
            </div>
        @endforeach
    @else
        <p class="text-center mt-4">No posts yet. Please check back later.</p>
    @endif
@endsection
