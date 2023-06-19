@extends('base')


@section('content')

<h2>Author:{{$author->name}}</h2>
<h3> {{$posts->count()}}  POSTS! published by this user!</h3>

    @if ($posts->count())
    
        @foreach($posts as $post)

            <h1>
                <a href="{{route('postdetails',$post) }}">
                BLOG ID: {{$post->id}}
                TITTLE:{{$post->tittle}}

                </a>

            </h1>
            <div>

            <h4>
              

            <a href="{{route('categoryposts',$post->category) }}">
                Category:{{$post->category->name}}

                </a>
            </h4>


            <h5>
              

                <a href="categories/{{$post->category->id}}">
                Author:{{$author->name}}

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
