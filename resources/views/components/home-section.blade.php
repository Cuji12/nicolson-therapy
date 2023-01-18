@props([
    'model',
])

<section class="w-full even:bg-purple odd:bg-light-blue p-5 flex flex-col">
    <h2 class="text-2xl text-blue font-playfair">{{ $model->title }}</h2>
    <p class="mt-2 pl-4">{{ $model->content }}</p>

    @if (isset($model->url) && isset($model->button_text))
        <a class="bg-blue text-white px-4 py-2 rounded-sm mx-auto inline-block mb-2 mt-4 hover:bg-dark-blue" href="{{ $model->url }}">
            {{ $model->button_text }}
        </a>
    @elseif (isset($model->url) && !isset($model->button_text))
         <a class="bg-blue text-white px-4 py-2 rounded-sm mx-auto inline-block mb-2 mt-4 hover:bg-dark-blue" href="{{ $model->url }}">
            Read More
        </a>
    @endif
</section>