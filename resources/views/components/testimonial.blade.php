@props([
    'model',
])

<div class="flex flex-wrap items-center justify-between p-5 cursor-pointer odd:bg-purple even:bg-light-blue md:w-10/12 lg:w-8/12 2xl:w-6/12 4xl:w-5/12 md:even:mr-4 md:odd:ml-4">
    <h2 class="w-10/12 text-lg font-bold text-blue md:text-xl xl:text-2xl">{{ $model->name }}</h2>
    <p class="w-full pl-4">{{ $model->testimonial }}</p>
</div>