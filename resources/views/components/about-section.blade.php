@props([
    'model',
])

<section class="rounded-sm flex flex-col w-full p-5 even:bg-purple odd:bg-light-blue xl:flex-row xl:odd:flex-row-reverse xl:flex-wrap 
    xl:items-center xl:justify-center xl:px-12 2xl:w-10/12 2xl:odd:ml-auto 2xl:odd:mr-20 2xl:even:ml-20 3xl:w-9/12 3xl:odd:mr-40 3xl:even:ml-40 4xl:w-7/12 4xl:odd:mr-112 4xl:even:ml-112">
    <div class="xl:block xl:w-8/12">
        <h2 class="text-2xl text-blue font-playfair md:text-3xl xl:w-full">{{ $model->title }}</h2>
        <p class="pl-4 mt-2">{{ $model->content }}</p>
        @if (isset($model->url) && isset($model->button_text))
            <a class="inline-block px-4 py-2 mx-auto mt-4 mb-2 text-white rounded-sm ml-4 bg-blue hover:bg-dark-blue" href="{{ $model->url }}">
                {{ $model->button_text }}
            </a>
        @elseif (isset($model->url) && !isset($model->button_text))
            <a class="inline-block px-4 py-2 mx-auto mt-4 mb-2 ml-4 text-white rounded-sm bg-blue hover:bg-dark-blue" href="{{ $model->url }}">
                Read More
            </a>
        @endif
    </div>
    <img class="hidden xl:inline-block xl:w-3/12 xl:max-w-72 xl:mx-5 rounded-md" src="{{ $model->getImageUrl() }}" />
</section>