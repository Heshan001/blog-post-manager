@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    {{-- 💬 Flash Message --}}
    @if (session('success'))
        <div class="mb-6 px-4 py-3 bg-green-100 border border-green-300 text-green-800 rounded shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-extrabold text-gray-900">📄 Blog Posts</h1>
        <a href="{{ route('posts.create') }}"
           class="inline-flex items-center px-5 py-2 bg-blue-600 text-white font-medium text-sm leading-5 rounded-md hover:bg-blue-700 transition shadow-md">
            ➕ Add Post
        </a>
    </div>

    <div class="overflow-x-auto bg-gray-100 shadow-lg rounded-lg">
        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-6 text-left border border-gray-300">Title</th>
                    <th class="py-3 px-6 text-left border border-gray-300">Content</th>
                    <th class="py-3 px-6 text-left border border-gray-300">Created</th>
                    <th class="py-3 px-6 text-center border border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @foreach ($posts as $post)
                    <tr class="border-b border-gray-300 hover:bg-gray-50 transition">
                        <td class="py-4 px-6 border border-gray-300 font-semibold">{{ $post->title }}</td>
                        <td class="py-4 px-6 border border-gray-300">{{ \Illuminate\Support\Str::limit($post->content, 50) }}</td>
                        <td class="py-4 px-6"> {{ $post->created_at->format('F j, Y - g:i A') }}</td>
                        <td class="py-4 px-6 border border-gray-300 text-center">
                            <div class="flex flex-wrap justify-center gap-2">
                                {{-- View Button --}}
                                <a href="{{ route('posts.show', $post->id) }}"
                                   class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white px-4 py-1.5 text-sm font-medium rounded shadow transition">
                                     View
                                </a>

                                {{-- Edit Button --}}
                                <a href="{{ route('posts.edit', $post->id) }}"
                                   class="inline-flex items-center bg-blue-500 hover:bg-blue-600 text-white px-4 py-1.5 text-sm font-medium rounded shadow transition">
                                     Edit
                                </a>

                                {{-- Delete Button --}}
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                @csrf
                @method('DELETE')
                <!-- Hidden input to pass the current page -->
                <input type="hidden" name="page" value="{{ request()->get('page', 1) }}">
                <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded transition">
                    Delete
                </button>
            </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($posts->isEmpty())
            <div class="text-center p-6 text-gray-500">No blog posts available.</div>
        @endif

        @if ($posts->count())
            <div class="mt-6">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
