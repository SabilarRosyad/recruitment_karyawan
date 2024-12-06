@extends('layouts.app_user')

@section('title', 'Apply')

@section('content')
    <!-- Main content -->
    <div class="flex-auto px-0 pt-0 pb-2 mt-20">
        <div class="p-6 overflow-x-auto">
            @if ($errors->any())
                    <div class="bg-red-100 text-red-700 p-4 rounded-md mb-4">
                        <p class="font-bold">There were some problems with your submission:</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <!-- Form untuk menambah aplikasi -->
            <form action="{{ route('application.tambah.simpan') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="job_title" class="block text-xs font-bold text-slate-400 uppercase">Job Title</label>
                    <input 
                        type="text" 
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" 
                        id="job_title" 
                        name="job_title" 
                        value="{{ $job->title }}" 
                        required 
                        readonly
                    >
                </div>

                <!-- Hidden Fields -->
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="job_id" value="{{ $job->id }}">

                <!-- CV -->
                <div class="mb-4">
                    <label for="cv" class="block text-xs font-bold text-slate-400 uppercase">CV
                        <span class="text-red-500 ml-1 text-sm">*</span>
                        <span class="text-xs text-gray-500 mt-1">(Wajib Di isi)</span>
                    </label>
                    <div class="flex items-center gap-4">
                        <!-- Input file untuk CV -->
                        <div class="flex-1">
                            <input 
                                type="file" 
                                class="block w-full h-[42px] border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" 
                                id="cv" 
                                name="cv"
                            >
                            <!-- Deskripsi format file -->
                            <p class="text-xs text-gray-500 mt-1">* Only files with formats PDF are allowed.</p>
                        </div>
                        <!-- Tulisan OR -->
                        <span class="font-bold text-gray-600">OR</span>
                        <!-- Input teks untuk link CV -->
                        <div class="flex-1">
                            <input 
                                type="text" 
                                class="block w-full h-[42px] border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" 
                                id="cv_link" 
                                name="cv_link" 
                                placeholder="Enter CV link"
                            >
                        </div>
                    </div>
                </div>

                <!-- Portofolio -->
                <div class="mb-4">
                    <label for="portofolio" class="block text-xs font-bold text-slate-400 uppercase">Portofolio
                        <span class="text-red-500 ml-1 text-sm">*</span>
                        <span class="text-xs text-gray-500 mt-1">(Jika Ada)</span>
                    </label>
                    <div class="flex items-center gap-4">
                        <!-- Input file untuk Portofolio -->
                        <div class="flex-1">
                            <input 
                                type="file" 
                                class="block w-full h-[42px] border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" 
                                id="portofolio" 
                                name="portofolio"
                            >
                            <!-- Deskripsi format file -->
                            <p class="text-xs text-gray-500 mt-1">* Only files with formats PDF, PPTX are allowed.</p>
                        </div>
                        <!-- Tulisan OR -->
                        <span class="font-bold text-gray-600">OR</span>
                        <!-- Input teks untuk link Portofolio -->
                        <div class="flex-1">
                            <input 
                                type="text" 
                                class="block w-full h-[42px] border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" 
                                id="portofolio_link" 
                                name="portofolio_link" 
                                placeholder="Enter Portfolio link"
                            >
                        </div>
                    </div>
                </div>

                <!-- Status (Hidden Field) -->
                <input type="hidden" name="status" value="pending">

                <!-- Tombol Submit -->
                <div>
                    <button type="submit" class="w-full bg-gradient-to-tl from-green-600 to-lime-400 text-white py-2 rounded-full hover:bg-blue-600">
                        Save Application
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
