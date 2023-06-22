@extends('base')



@section('content')


<!-- Your create post form -->
<form action="{{ route('storepost') }}" method="POST">
    @csrf
    <div>
        <label for="tittle">Title:</label>
        <input type="text" name="tittle" id="tittle" required>
        @error('tittle')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="slug">Slug:</label>
        <input type="text" name="slug" id="slug" required>
        @error('slug')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="body">Body:</label>
        <textarea name="body" id="body" required></textarea>
        @error('body')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="category">Category:</label>
        <select name="category_id" id="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="tags">Tags:</label>
        <select name="tags[]" id="tags" multiple>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        @error('tags')
            <span class="error">{{ $message }}</span>
        @enderror
        
        

        <a href="{{ route('tags.create') }}">CREATE NEW TAG:   </a>
    </div>
    <div>
        <button type="submit">Create</button>
    </div>
</form>



@endsection
