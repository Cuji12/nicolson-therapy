<div class="relative top-0 left-0 items-center justify-center hidden w-full h-full bg-blue" x-data="{ hidePopOut: true }" x-bind:class="hidePopOut ? 'flex-important' : ''">
    <div class="absolute w-10 h-10 text-5xl cursor-pointer top-5 right-8" @click="open = false">
        <hr class="absolute left-0 w-10 origin-center rotate-45 border-2 border-light-blue rounded-xl top-4" />
        <hr class="absolute left-0 w-10 origin-center border-2 border-light-blue rounded-xl rotate-315 top-4" />
    </div>
    <nav class="text-white">
        <ul class="flex flex-col text-4xl font-bold text-center gap-y-8">
           <li class=>
                <a class="hover:text-purple active:text-purple" href="{{ route('site.index') }}">Home</a>
            </li>
            <li class=>
                <a class="hover:text-purple active:text-purple" href="{{ route('site.about') }}">About</a>
            </li>
            <li class=>
                <a class="hover:text-purple active:text-purple" href="{{ route('site.blog')}}">Blog</a>
            </li>
            <li class=>
                <a class="hover:text-purple active:text-purple" href="{{ route('site.contact') }}">Contact</a>
            </li>
            <li class=>
                <a class="hover:text-purple active:text-purple" href="{{ route('site.faqs') }}">FAQs</a>
            </li>
            <li class=>
                <a class="hover:text-purple active:text-purple" href="{{ route('site.testimonials') }}">Testimonials</a>
            </li>
        </ul>
    </nav>
</div>