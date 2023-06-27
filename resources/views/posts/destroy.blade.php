@extends('base')

@section('content')
    <div class="container mx-auto">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Delete Post</h2>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Are you sure you want to delete this post?</h4>
                <p class="mb-2"><span class="font-semibold">Title:</span> {{ $post->title }}</p>
                <p class="mb-4"><span class="font-semibold">Author:</span> {{ $post->author->name }}</p>
                <form method="POST" action="{{ route('posts.destroy', $post) }}" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">Delete</button>
                </form>
                <a href="{{ route('index') }}" class="ml-2 inline-block text-gray-600 underline">Cancel</a>
            </div>
        </div>
    </div>

@endsection