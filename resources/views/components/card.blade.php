@props(['post'])

<div class="card border rounded-lg p-4 bg-white shadow-md">
    <h2 class="text-xl font-bold">{{ $post->title }}</h2>
    <p class="text-sm text-gray-600">{{ $post->created_at->diffForHumans() }}</p>
    <p class="mt-2">{{ Str::limit($post->content, 150) }}</p>

    <div class="mt-4 flex gap-2">
        <!-- View button that links to the show page for the post -->
        <a href="{{ route('posts.show', $post->id) }}">
            <x-button type="button">View</x-button>
        </a>

        <!-- Edit button to link to the edit form -->
        <a href="{{ route('posts.edit', $post->id) }}">
            <x-button type="button" class="bg-yellow-600 hover:bg-yellow-700">Edit</x-button>
        </a>

        <!-- Delete form to remove the post -->
        <form method="POST" action="{{ route('posts.destroy', $post) }}">
            @csrf
            @method('DELETE')
            <x-button type="submit" class="bg-red-600 hover:bg-red-700">Delete</x-button>
        </form>
    </div>
</div>
