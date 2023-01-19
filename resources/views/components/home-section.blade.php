@props([
    'model',
])

<section class="flex flex-col w-full p-5 even:bg-purple odd:bg-light-blue">
    <h2 class="text-2xl text-blue font-playfair md:text-3xl">{{ $model->title }}</h2>
    <p class="pl-4 mt-2">{{ $model->content }}</p>
    <img class="" src="{{ $model->image_url }}" />

    @if (isset($model->url) && isset($model->button_text))
        <a class="inline-block px-4 py-2 mx-auto mt-4 mb-2 text-white rounded-sm bg-blue hover:bg-dark-blue" href="{{ $model->url }}">
            {{ $model->button_text }}
        </a>
    @elseif (isset($model->url) && !isset($model->button_text))
         <a class="inline-block px-4 py-2 mx-auto mt-4 mb-2 text-white rounded-sm bg-blue hover:bg-dark-blue" href="{{ $model->url }}">
            Read More
        </a>
    @endif
</section>