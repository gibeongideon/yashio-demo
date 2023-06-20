@extends('base')



@section('content')


            <div>


          Tags:
            @foreach($post->tags as $tag)

            <h6>{{$tag->name}}</h6>

            @endforeach


             </div>



<h2>
  Blog od ID: {{$post->id}}  with SLUG: {{$post->slug}}
</h2>
 <p>
    Implement BLOG CONTENT HERE !!!
 </p>

@endsection
