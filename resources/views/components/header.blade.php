@props([
    'title'
])

<header class="flex items-center justify-between h-20 px-8 bg-white xl:h-24 xl:px-12 5xl:justify-around">
    <a class="text-xl logo text-light-blue lg:text-2xl 4xl:text-3xl" href="{{route('site.index') }}">
        <strong class="text-blue logo">Nicolson</strong>Therapy
    </a>
    <nav class="hidden xl:flex">
        <ul class="flex font-bold xl:items-center xl:justify-evenly xl:text-xl">
            <li class="mx-2">
                <a class="hover:text-purple active:text-purple" href="{{ route('site.index') }}">Home</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-purple active:text-purple" href="{{ route('site.about') }}">About</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-purple active:text-purple" href="{{ route('site.blog')}}">Blog</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-purple active:text-purple" href="{{ route('site.contact') }}">Contact</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-purple active:text-purple" href="{{ route('site.faqs') }}">FAQs</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-purple active:text-purple" href="{{ route('site.testimonials') }}">Testimonials</a>
            </li>
            <li class="ml-5 text-blue hover:text-dark-blue">
                <a href="mailto:hello@nicolsontherapy.co.uk">
                    hello@nicolsontherapy.co.uk
                </a>               
            </li>
        </ul>
    </nav>
    <x-menu>
        <x-slot:trigger>
            <div class="flex flex-col content-center justify-center w-10 gap-y-2">
                <hr class="border-2 border-blue rounded-xl" />
                <hr class="border-2 border-blue rounded-xl" />
                <hr class="border-2 border-blue rounded-xl" />
            </div>
        </x-slot>
        <x-mobile-menu />
    </x-menu>
</header>
@if ($title)
    <section class="flex items-end justify-center h-24 pb-4 bg-white">
        <h1 class="text-3xl font-bold text-center grow text-blue md:text-left md:w-10/12 md:grow-0 lg:w-8/12 2xl:w-6/12 3xl:text-4xl 4xl:w-5/12">{{ $title }}</h1>
    </section>
@endif;
