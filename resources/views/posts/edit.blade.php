@extends('base')


@section('content')
    <div class="container mx-auto">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Edit Post</h2>
            </div>
            <form method="POST" action="{{ route('posts.update', $post) }}">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block font-semibold mb-2">Title</label>
                    <input type="text" name="title" id="title" value="{{ $post->title }}" class="w-full border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="body" class="block font-semibold mb-2">Body</label>
                    <textarea name="body" id="body" rows="5" class="w-full border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">{{ $post->body }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="slug" class="block font-semibold mb-2">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{ $post->slug }}" class="w-full border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="tags" class="block font-semibold mb-2">Tags</label>
                    <select name="tags[]" id="tags" class="w-full border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection