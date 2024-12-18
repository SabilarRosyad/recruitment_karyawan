@extends('layouts.app_user')

@section('title', 'Edit Profile')

@section('content')
    <!-- Add margin-top to push content below navbar -->
    <div class="mt-20">
        <form action="{{ route('profile.update', ['id' => auth()->user()->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md space-y-6">
                
                <!-- Username -->
                <div class="flex flex-col">
                    <label for="username" class="text-lg font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" value="{{ auth()->user()->username }}" class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <!-- Email -->
                <div class="flex flex-col">
                    <label for="email" class="text-lg font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ auth()->user()->email }}" class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <!-- Password -->
                <div class="flex flex-col">
                    <label for="password" class="text-lg font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="New Password" class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <small class="text-gray-500 mt-1">Leave empty if you don't want to change the password.</small>
                </div>

                <!-- Hidden Role Field -->
                <input type="hidden" name="role" value="{{ auth()->user()->role }}">

                <!-- Foto Profil -->
                <div class="flex flex-col">
                    <label for="image" class="text-lg font-medium text-gray-700">Foto Profil</label>
                    <input type="file" name="image" id="image" class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <small class="text-gray-500 mt-1">Choose a profile photo (optional).</small>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit" class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Save Changes
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
