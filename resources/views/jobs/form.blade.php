@extends('layouts.app')

@section('title', 'Form Job')

@section('content')
<main class="ease-soft-in-out relative h-full max-h-screen rounded-xl transition-all duration-200">
    <div class="w-full px-6 py-6"> <!-- Sama seperti job.blade -->
        <div class="flex flex-wrap">
            <div class="flex-none w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                        <h6 class="text-lg font-bold text-slate-700">Form Edit Job</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-6 overflow-x-auto"> <!-- Sama seperti di job.blade untuk scrollbar -->
                            <form action="{{ isset($job) ? route('job.tambah.update', $job->id) : route('job.tambah.simpan') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="title" class="block text-xs font-bold text-slate-400 uppercase">Title</label>
                                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="title" name="title" value="{{ isset($job) ? $job->title : '' }}">
                                </div>
                                <div class="mb-4">
                                    <label for="description" class="block text-xs font-bold text-slate-400 uppercase">Description</label>
                                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="description" name="description" value="{{ isset($job) ? $job->description : '' }}">
                                </div>
                                <div class="mb-4">
                                    <label for="location" class="block text-xs font-bold text-slate-400 uppercase">Location</label>
                                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="location" name="location" value="{{ isset($job) ? $job->location : '' }}">
                                </div>
                                <div class="mb-4">
                                    <label for="salary" class="block text-xs font-bold text-slate-400 uppercase">Salary</label>
                                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="salary" name="salary" value="{{ isset($job) ? $job->salary : '' }}">
                                </div>
                                <div class="mb-4">
                                    <label for="status" class="block text-xs font-bold text-slate-400 uppercase">Status</label>
                                    <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="status" name="status">
                                        <option value="open" {{ isset($job) && $job->status == 'open' ? 'selected' : '' }}>Open</option>
                                        <option value="close" {{ isset($job) && $job->status == 'close' ? 'selected' : '' }}>Close</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="employment_type" class="block text-xs font-bold text-slate-400 uppercase">Employment Type</label>
                                    <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="status" name="employment_type">
                                        <option value="full-time" {{ isset($job) && $job->employment_type == 'full-time' ? 'selected' : '' }}>Full-Time</option>
                                        <option value="part-time" {{ isset($job) && $job->employment_type == 'part-time' ? 'selected' : '' }}>Part-Time</option>
                                        <option value="internship" {{ isset($job) && $job->employment_type == 'internship' ? 'selected' : '' }}>internship</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="experience_level" class="block text-xs font-bold text-slate-400 uppercase">Experience Level</label>
                                    <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="status" name="experience_level">
                                        <option value="entry" {{ isset($job) && $job->experience_level == 'entry' ? 'selected' : '' }}>Entry</option>
                                        <option value="mid" {{ isset($job) && $job->experience_level == 'mid' ? 'selected' : '' }}>Mid</option>
                                        <option value="senior" {{ isset($job) && $job->experience_level == 'senior' ? 'selected' : '' }}>Senior</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="skills_required" class="block text-xs font-bold text-slate-400 uppercase">Skills Required</label>
                                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="skills_required" name="skills_required" value="{{ isset($job) ? $job->skills_required : '' }}">
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
