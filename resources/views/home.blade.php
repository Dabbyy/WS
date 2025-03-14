@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-blue-600">Welcome to My Laravel App!</h1>
    <p class="text-lg text-gray-700 mt-2">Enjoy a sleek and modern experience.</p>

    <div class="mt-6 flex justify-center gap-4">
        <a href="{{ route('about') }}" class="btn bg-blue-600 text-white px-6 py-2 rounded-full shadow-md hover:bg-blue-700">
            Learn More
        </a>
        <a href="{{ route('contact') }}" class="btn bg-green-600 text-white px-6 py-2 rounded-full shadow-md hover:bg-green-700">
            Contact Us
        </a>
    </div>
</div>
@endsection
