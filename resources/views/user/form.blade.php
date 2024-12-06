@extends('layouts.app')

@section('title', 'Form User')

@section('content')
<main class="ease-soft-in-out relative h-full max-h-screen rounded-xl transition-all duration-200">
    <div class="w-full px-6 py-6">
        <div class="flex flex-wrap">
            <div class="flex-none w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                        <h6 class="text-lg font-bold text-slate-700">Form Edit User</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-6 overflow-x-auto">
                            <form action="{{ isset($user) ? route('user.tambah.update', $user->id) : route('user.tambah.simpan') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="username" class="block text-xs font-bold text-slate-400 uppercase">Username</label>
                                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="username" name="username" value="{{ isset($user) ? $user->username : '' }}">
                                    @error('username')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-xs font-bold text-slate-400 uppercase">Email</label>
                                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="email" name="email" value="{{ isset($user) ? $user->email : '' }}">
                                    @error('email')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="block text-xs font-bold text-slate-400 uppercase">Password</label>
                                    <input type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="password" name="password" value="{{ isset($user) ? $user->password : '' }}">
                                    @error('password')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="role" class="block text-xs font-bold text-slate-400 uppercase">Role</label>
                                    <select id="role" name="role" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500">
                                        <option value="admin" {{ isset($user) && $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="user" {{ isset($user) && $user->role == 'user' ? 'selected' : '' }}>User</option>
                                    </select>
                                    @error('role')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="image" class="block text-xs font-bold text-slate-400 uppercase">Foto Profil</label>
                                    <input type="file" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" name="image" accept=".jpg,.jpeg,.png">
                                    @error('image')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                    @if (isset($user) && $user->profile_photo)
                                        <img src="{{ asset('storage/'.$user->profile_photo) }}" alt="Foto Profil" class="w-8 h-8 object-cover inline-block ml-2">
                                    @endif
                                </div>
                                <div>
                                    <button type="submit" class="w-full bg-gradient-to-tl from-green-600 to-lime-400 text-white py-2 rounded-full hover:bg-blue-600">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
