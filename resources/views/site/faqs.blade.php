@extends('layouts.app')

@section('title', 'FAQs')
@section('description', 'Answers to commonly asked questions.')

@section('header')
    <x-header title="FAQs" />
@endsection

@section('content')
    <main class="flex flex-col items-center min-h-screen pt-10 pb-96 md:text-lg">
        <div class="w-full">
            @foreach ($faqs as $key => $faq)
                <x-faq :model="$faq" :toggleKey="$key"/>
            @endforeach        
        </div>
    </main>
@endsection