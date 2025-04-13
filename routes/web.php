<?php

use App\Http\Controllers\PostController;


// Display the list of posts
Route::get('/', [PostController::class, 'index'])->name('posts.index');

// Show the form to create a new post
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');

// Store the newly created post
Route::post('/post', [PostController::class, 'store'])->name('posts.store');

// Show a single post
Route::get('/post/{post}', [PostController::class, 'show'])->name('posts.show');

// Show the form to edit a post
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Update an existing post
Route::put('/post/{post}', [PostController::class, 'update'])->name('posts.update');

// Delete a post
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

