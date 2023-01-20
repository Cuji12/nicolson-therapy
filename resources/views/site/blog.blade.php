@extends('layouts.app')

@section('title', 'Blog')
@section('description', 'The things I\'ve been writing about lately.')

@section('content')
    <main class="flex flex-col items-center min-h-screen pt-10 pb-96 md:text-lg">
        @foreach ($posts as $post)
            <x-blog-post :model="$post"/>
        @endforeach
    </main>
@endsection