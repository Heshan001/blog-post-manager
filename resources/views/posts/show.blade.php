@extends('layouts.app')

@section('content')
    <div class="post">
        <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
        <p class="text-sm text-gray-600">{{ $post->created_at->diffForHumans() }}</p>
        <div class="mt-4">
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection
