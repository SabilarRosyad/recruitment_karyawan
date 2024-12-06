@extends('layouts.app_user')

@section('title', 'About Us')

@section('content')
<div id="background-section" class="min-h-screen bg-cover bg-center flex flex-col items-center justify-center text-center transition-all duration-300 pt-16" style="background-image: url('{{ asset('images/about.jpg') }}');">
    <div class="bg-black bg-opacity-50 p-6 rounded-lg max-w-3xl mx-auto">
        <h1 class="text-white text-3xl font-bold mb-2">About Us</h1>
        <p class="text-white text-base sm:text-lg">
            Sistem Jurnalistik Terpadu merupakan sebuah inovasi yang bertujuan untuk menyatukan berbagai aspek dalam dunia jurnalisme, mulai dari pengumpulan informasi, proses penyuntingan, hingga publikasi konten.
        </p>
    </div>
</div>
@endsection
