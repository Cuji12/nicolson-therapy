@props([
    'model',
])

<section class="flex flex-col w-full p-5 even:bg-purple odd:bg-light-blue xl:flex-row xl:odd:flex-row-reverse xl:flex-wrap xl:items-center xl:justify-center xl:px-12">
    <div class="hidden xl:block xl:w-8/12">
        <h2 class="text-2xl text-blue font-playfair md:text-3xl xl:w-full">{{ $model->title }}</h2>
        <p class="pl-4 mt-2">{{ $model->content }}</p>
        @if (isset($model->url) && isset($model->button_text))
            <a class="inline-block px-4 py-2 mx-auto mt-4 mb-2 text-white rounded-sm xl:ml-4 bg-blue hover:bg-dark-blue" href="{{ $model->url }}">
                {{ $model->button_text }}
            </a>
        @elseif (isset($model->url) && !isset($model->button_text))
            <a class="inline-block px-4 py-2 mx-auto mt-4 mb-2 text-white rounded-sm bg-blue hover:bg-dark-blue xl:ml-4" href="{{ $model->url }}">
                Read More
            </a>
        @endif
    </div>
    <img class="hidden xl:inline-block xl:w-3/12 xl:max-w-72 xl:mx-5" src="{{ $model->getImageUrl() }}" />
</section>