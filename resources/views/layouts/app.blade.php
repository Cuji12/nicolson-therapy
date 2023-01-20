<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        @if(isset($blogPostCss))
        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/css/blogPost.css', 'resources/js/app.js'])
        @else
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet"> 
        <link rel="shortcut icon" href="/favicon.png">
    </head>
    <body style="background-image: url('/images/background.svg')" class="relative antialiased pb-96 sm:pb-32 lg:pb-50 2xl:pb-0 bg-gradient-to-tl" x-data="{ open: false }" x-bind:class="open ? 'overflow-hidden' : ''">
        <header class="flex items-center justify-between h-20 px-8 xl:h-24 xl:px-12 5xl:justify-around bg-white">
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

        @yield('content')

        <footer class="absolute bottom-0 w-full text-white bg-blue">
            <div class="flex flex-wrap justify-between p-6 mx-auto text-lg max-w-xl 2xl:max-w-5xl gap-y-6">
                <div>
                    <p class="text-xl font-bold">Quick Links</p>
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a class="hover:text-purple active:text-purple" href="{{ route('site.index') }}">Home</a>
                        </li>
                        <li>
                            <a class="hover:text-purple active:text-purple" href="{{ route('site.about') }}">About</a>
                        </li>
                        <li>
                            <a class="hover:text-purple active:text-purple" href="{{ route('site.blog') }}">Blog</a>
                        </li>
                        <li>
                            <a class="hover:text-purple active:text-purple" href="{{ route('site.contact') }}">Contact</a>
                        </li>
                        <li>
                            <a class="hover:text-purple active:text-purple" href="{{ route('site.faqs') }}">FAQs</a>
                        </li>
                        <li>
                            <a class="hover:text-purple active:text-purple" href="{{ route('site.testimonials') }}">Testimonials</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="text-xl font-bold">Get in Touch</p>
                    <ul class="flex flex-col gap-y-1 ">
                        <li>
                            <a class="hover:text-purple active:text-purple" href="mailto:hello@nicolsontherapy.co.uk">hello@nicolsontherapy.co.uk</a>
                        </li>
                        <li>
                            <a class="hover:text-purple active:text-purple" href="tel:555 555 555">555 555 555</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="text-xl font-bold">Help and Advice</p>
                    <ul class="flex flex-col gap-y-1 ">
                        <li>
                            <a class="hover:text-purple active:text-purple" href="{{ route('site.contact') }}">Contact</a>
                        </li>
                        <li>
                            <a class="hover:text-purple active:text-purple" href="{{ route('site.faqs') }}">FAQs</a>
                        </li>
                    </ul>
                </div>
                 <div>
                    <p class="text-xl font-bold">Contract</p>
                    <ul class="flex flex-col gap-y-1 ">
                        <li>
                            <a class="hover:text-purple active:text-purple" href="{{ route('site.therapy-contract') }}">Therapy Contract</a>
                        </li>
                        <li>
                            Copyright &copy; Nicolson Therapy {{ date('Y') }}
                        </li>
                    </ul>
                </div>
                <p class="self-center max-w-2xl mx-auto text-sm text-center xl:text-md text-slate-300">
                    Nicolson Therapy Ltd a company incorporated and registered in England and Wales with company number LORUM whose registered office is at 
                    7 Rippenden, Manchester, England, M21 9SS
                </p>
            </div>
        </footer>
    </body>
</html>
