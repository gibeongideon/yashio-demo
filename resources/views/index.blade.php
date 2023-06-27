@extends('base')


@section('content')
    <div class="container mx-auto">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Dashboard</h2>

            <div class="grid grid-cols-2 gap-4">
                <div class="border border-gray-300 p-4 rounded-lg">
                    <h4 class="text-lg font-semibold mb-2">User Actions</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('profile.edit') }}">Edit Profile</a></li>
                        <li><a href="{{ route('profile.destroy') }}" onclick="event.preventDefault(); document.getElementById('delete-profile-form').submit();">Delete Profile</a></li>
                        <form id="delete-profile-form" action="{{ route('profile.destroy') }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </ul>
                </div>

                <div class="border border-gray-300 p-4 rounded-lg">
                    <h4 class="text-lg font-semibold mb-2">Posts</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('posts.create') }}">Create New Post</a></li>
                        <li><a href="{{ route('posts.all') }}">View All Posts</a></li>
                    </ul>
                </div>

                <div class="border border-gray-300 p-4 rounded-lg">
                    <h4 class="text-lg font-semibold mb-2">Tags</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('tags.index') }}">View All Tags</a></li>
                        <li><a href="{{ route('tags.create') }}">Create New Tag</a></li>
                    </ul>
                </div>

                <div class="border border-gray-300 p-4 rounded-lg">
                    <h4 class="text-lg font-semibold mb-2">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="">View All Categories</a></li>
                        <li><a href="">Create New Category</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

