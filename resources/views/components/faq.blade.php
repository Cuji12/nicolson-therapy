@props([
    'model',
    'toggleKey'
])

<div class="flex flex-wrap items-center justify-between p-5 mx-auto cursor-pointer odd:bg-white even:bg-gray-200 even:hover:bg-purple odd:hover:bg-light-blue md:w-10/12 lg:w-8/12 2xl:w-6/12 4xl:w-5/12"
    x-data="{ $toggleKey: false }" @click="$toggleKey = ! $toggleKey">
    <h2 class="w-10/12 text-lg font-bold text-blue md:text-xl xl:text-2xl">{{ $model->question }}</h2>
    <img x-show="!$toggleKey" class="h-4" src="/images/chevron.svg" />
    <p class="w-full pl-4" x-show="$toggleKey">{{ $model->answer }}</p>
</div>