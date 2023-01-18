@extends('layouts.app')

@section('title', 'Nicolson Therapy')
@section('description', 'Doing health things!')

@section('content')
    <main class="flex flex-col pt-10 items-center min-h-screen pb-96">
        <section class="relative w-72 pb-40">
            <img class="rounded-full z-10 relative" src="/images/test-image.png" />
            <div class="bg-purple h-auto rounded-t-full absolute w-full top-0 p-5">
                <h1 class="font-playfair relative mt-72 text-center text-3xl text-blue">Nicolson Therapy</h1>
                <p class="relative pl-4 mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum 
                </p>
            </div>
        </section>

        <div class="mt-80">
            @foreach ($homeSections as $homeSection)
                <x-home-section :model="$homeSection"/>
            @endforeach        
        </div>
    </main>
@endsection