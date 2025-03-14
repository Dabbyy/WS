@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="card mx-auto w-2/3">
    <h1 class="text-3xl font-bold text-green-600">Contact Us</h1>
    <p class="text-lg text-gray-700 mt-2">Feel free to reach out to us anytime!</p>
    
    <form class="mt-4">
        <input type="text" placeholder="Your Name" class="block w-full p-2 border border-gray-300 rounded mb-3">
        <input type="email" placeholder="Your Email" class="block w-full p-2 border border-gray-300 rounded mb-3">
        <textarea placeholder="Your Message" class="block w-full p-2 border border-gray-300 rounded mb-3"></textarea>
        <button class="bg-blue-600 text-white px-6 py-2 rounded-full shadow-md hover:bg-blue-700">Send Message</button>
    </form>
</div>
@endsection
