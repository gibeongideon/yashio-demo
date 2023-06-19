@extends('base')


@section('content')
<h1>ALL POSTS</h1>

    @if ($posts->count())
        @foreach($posts as $post)

            <h1>
                <a href="posts/{{$post->slug}}">
                BLOG ID: {{$post->id}}
                TITTLE:{{$post->tittle}}

                </a>

            </h1>
            <div>

            <h4>
              

                <a href="/categories/{{$post->category->id}}">
                Category:{{$post->category->name}}

                </a>
            </h4>


            <h5>
              

                <a href="authors/{{$post->author->id}}">
                Author:{{$post->author->name}}

                </a>
            </h5>            
            </div>

            <div>

            <p>
                {{$post->body}}
            </p>
            </div>
            
        @endforeach
         
    @else
        <p class="text-center">No posts yet. Please check back later.</p>
    @endif
 

@endsection
