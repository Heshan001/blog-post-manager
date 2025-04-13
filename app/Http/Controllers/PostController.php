<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Display the list of posts
    public function index(Request $request)
{
    $perPage = 5;
    $page = $request->input('page', 1);
    $posts = Post::orderBy('created_at', 'desc')->paginate(5);


    // 🧠 Redirect if current page is empty and not the first page
    if ($posts->isEmpty() && $page > 1) {
        return redirect()->route('posts.index', ['page' => $page - 1]);
    }

    return view('posts.index', compact('posts'));
}

    
    public function create()
    {
        return view('posts.create'); 
    }

    // Store a newly created post in the database
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    Post::create($validated);

    return redirect()->route('posts.index')->with('success', 'Post created successfully!');
}


    // Show a single post
    public function show(Post $post)
    {
        return view('posts.show', compact('post')); 
    }

    // Show the form to edit an existing post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post')); 
    }

    // Update an existing post
    public function update(Request $request, Post $post)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|max:255', // Title must be required and not longer than 255 characters
            'content' => 'required', // Content must be required
        ]);

        // Update the post in the database
        $post->update($request->all());

        // Redirect to the index route after updating the post
        return redirect()->route('posts.index');
    }

    // Delete a post from the database
    public function destroy(Post $post)
{
    $post->delete();
    
    // Retrieve the current page number from the request
    $currentPage = request()->input('page', 1);
    
    // Redirect back to the posts index with the current page number
    return redirect()->route('posts.index', ['page' => $currentPage])
                     ->with('success', 'Post deleted successfully.');
}
}
