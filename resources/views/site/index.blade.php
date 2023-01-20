@extends('layouts.app')

@section('title', 'Nicolson Therapy')
@section('description', 'Doing health things!')

@section('header')
    <x-header :title="false"/>
@endsection

@section('content')
    <main class="flex flex-col items-center min-h-screen pt-10 pb-96 md:text-lg">
        <section class="relative flex max-w-6xl pb-40 w-72 sm:w-96 lg:w-11/12 lg:pb-0">
            <img class="relative z-10 rounded-full lg:w-96" src="/images/test-image.png" />
            <div class="absolute top-0 w-full h-auto p-5 rounded-t-full bg-purple lg:w-full lg:rounded-l-full lg:rounded-r-none lg:h-96">
                <h1 class="relative text-3xl text-center font-playfair mt-72 sm:mt-96 text-blue sm:text-left md:text-4xl lg:mt-20 lg:ml-96">Nicolson Therapy</h1>
                <p class="relative pl-4 mt-2 lg:ml-96">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                </p>
            </div>
        </section>

        <div class="mt-80 sm:mt-60 md:mt-80 lg:mt-28">
            @foreach ($homeSections as $homeSection)
                <x-home-section :model="$homeSection"/>
            @endforeach        
        </div>
    </main>
@endsection