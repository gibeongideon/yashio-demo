@extends('base')


<!-- tags/create.blade.php -->

@section('content')

<h1>Create Tag</h1>

<form action="{{ route('tags.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <button type="submit">Create</button>
    </div>
</form>




@endsection
