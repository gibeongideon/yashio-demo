@extends('base')



@section('content')


<div>
<!-- Your create post form -->

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
        <label for="body">Body:</label>
        <textarea name="body" id="body" required></textarea>
        @error('body')
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
    </div>
    <div>
        <button type="submit">Create</button>
    </div>
</form>



</div>





@endsection
