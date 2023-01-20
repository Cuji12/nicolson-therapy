@extends('layouts.app')

@section('title', 'Testimonials')
@section('description', '.')

@section('header')
    <x-header title="Testimonials" />
@endsection

@section('content')
    <main class="min-h-screen pt-10 pb-96 md:text-lg">
        <div class="flex flex-col items-center w-full">
            @foreach ($testimonials as $testimonial)
                <x-testimonial :model="$testimonial"/>
            @endforeach        
        </div>
    </main>
@endsection