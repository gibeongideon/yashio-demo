@extends('base')



@section('content')


            <div>


          
            @foreach($post->roles as $role)
            Tags:

            <h6>$role->name</h6>

            @endforeach


             </div>



<h2>
  Blog od ID: {{$post->id}}  with SLUG: {{$post->slug}}
</h2>
 <p>
    Implement BLOG CONTENT HERE !!!
 </p>

@endsection
