@extends('base')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Tag</h1>

    <form action="{{ route('tags.store') }}" method="POST" class="max-w-sm mx-auto">
        @csrf
        <div class="mb-4">
            <label for="name" class="block font-medium text-gray-700">Name:</label>
            <input type="text" name="name" id="name" required class="border border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:ring focus:border-blue-500">
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-blue px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Create</button>
        </div>
    </form>
@endsection
