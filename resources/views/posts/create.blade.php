@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Create a New Post</h1>

    <form method="POST" action="{{ route('posts.store') }}" class="space-y-4">
        @csrf

        <div>
            <label for="title" class="block font-medium">Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 border rounded" required>
        </div>

        <div>
            <label for="content" class="block font-medium">Content</label>
            <textarea name="content" id="content" rows="6" class="w-full p-2 border rounded" required></textarea>
        </div>

        <div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Create Post</button>
        </div>
    </form>
@endsection
