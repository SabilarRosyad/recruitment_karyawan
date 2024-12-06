@extends('layouts.app_user')

@section('title', 'Profile')

@section('content')
    <!-- Profile Section -->
    <section class="mt-20 bg-white shadow-lg rounded-lg p-6 max-w-4xl mx-auto">
        <div class="flex flex-col sm:flex-row items-center sm:items-start">
            <!-- Profile Picture -->
            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-green-500 flex items-center justify-center bg-gray-200">
                @if(auth()->user()->profile_photo)
                    <img src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="Profile Photo" class="w-full h-full object-cover">
                @else
                    <span class="text-white font-semibold">Profile Photo</span>
                @endif
            </div>

            <!-- Profile Information -->
            <div class="sm:ml-6 mt-6 sm:mt-0">
                <h1 class="text-2xl font-semibold text-gray-800">{{ auth()->user()->username }}</h1>
                <p class="text-gray-600 mt-2">
                    Email: <span class="font-medium text-gray-800">{{ auth()->user()->email }}</span>
                </p>
                <p class="text-gray-600 mt-1">
                    Role: <span class="font-medium text-gray-800">{{ auth()->user()->role }}</span>
                </p>
                <p class="text-gray-600 mt-1">
                    Password: <span class="font-medium text-gray-800">********</span>
                </p>

                <!-- Edit Profile Button -->
                <div class="mt-4">
                    <a href="{{ route('profile.edit', ['id' => auth()->user()->id]) }}">
                        <button class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Edit Profile
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
