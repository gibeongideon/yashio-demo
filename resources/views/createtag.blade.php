@extends('base')



@section('content')


<!-- Your create tag form -->

<!-- Your create tag form -->
<form action="{{ route('storetag') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <button type="submit">Create</button>
    </div>
</form>



@endsection
