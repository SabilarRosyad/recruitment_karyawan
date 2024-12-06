@extends('layouts.app_user')

@section('title', 'Contact Us')

@section('content')
    <!-- Background Section -->
    <div class="min-h-screen bg-cover bg-center flex flex-col items-center justify-center pt-24 sm:pt-16 text-center" style="background-image: url('{{ asset('images/contact.jpg') }}'); margin-bottom: -1px;">
        <div class="bg-black bg-opacity-50 p-6 rounded-lg max-w-3xl mx-auto">
            <h1 class="text-white text-3xl font-bold mb-2">Contact Us</h1>
            <p class="text-white text-base sm:text-lg"><strong>Email:</strong> admin@winnicode.com</p>
            <p class="text-white text-base sm:text-lg"><strong>Telepon:</strong> +62 851-5993-2501</p>
            <p class="text-white text-base sm:text-lg mb-4">Kami siap membantu Anda 24/7</p>
        </div>
    </div>
@endsection
