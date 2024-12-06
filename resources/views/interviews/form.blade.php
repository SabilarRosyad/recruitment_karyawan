@extends('layouts.app')

@section('title', 'Form Interviews')

@section('content')
<main class="ease-soft-in-out relative h-full max-h-screen rounded-xl transition-all duration-200">
    <div class="w-full px-6 py-6">
        <div class="flex flex-wrap">
            <div class="flex-none w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                        <h6 class="text-lg font-bold text-slate-700">
                            {{ isset($interviews) ? 'Edit Interview' : 'Tambah Interview' }}
                        </h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-6 overflow-x-auto">
                            <form action="{{ isset($interviews) ? route('interviews.update', $interviews->id) : route('interviews.simpan') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @if(isset($interviews))
                                    @method('PUT')
                                @endif

                                <!-- Dropdown Application ID -->
                                <div class="mb-4">
                                    <label for="application_id" class="block text-xs font-bold text-slate-400 uppercase">Application</label>
                                    <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="application_id" name="application_id" required>
                                        <option value="">-- Pilih Application --</option>
                                        @foreach($applications as $application)
                                            <option value="{{ $application->id }}" 
                                                {{ isset($interviews) && $interviews->application_id == $application->id ? 'selected' : '' }}>
                                                {{ $application->id }} - {{ $application->user->username ?? 'User Tidak Ditemukan' }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Input Interview Date -->
                                <div class="mb-4">
                                    <label for="interview_date" class="block text-xs font-bold text-slate-400 uppercase">Interview Date</label>
                                    <input type="date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="interview_date" name="interview_date" value="{{ isset($interviews) ? $interviews->interview_date->format('Y-m-d') : '' }}" required>
                                </div>

                                <!-- Dropdown Interview Mode -->
                                <div class="mb-4">
                                    <label for="interview_mode" class="block text-xs font-bold text-slate-400 uppercase">Interview Mode</label>
                                    <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="interview_mode" name="interview_mode" required>
                                        <option value="online" {{ isset($interviews) && $interviews->interview_mode == 'online' ? 'selected' : '' }}>Online</option>
                                        <option value="offline" {{ isset($interviews) && $interviews->interview_mode == 'offline' ? 'selected' : '' }}>Offline</option>
                                    </select>
                                </div>

                                <!-- Dropdown Interview Result -->
                                <div class="mb-4">
                                    <label for="interview_result" class="block text-xs font-bold text-slate-400 uppercase">Interview Result</label>
                                    <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="interview_result" name="interview_result" required>
                                        <option value="pending" {{ isset($interviews) && $interviews->interview_result == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="passed" {{ isset($interviews) && $interviews->interview_result == 'passed' ? 'selected' : '' }}>Passed</option>
                                        <option value="failed" {{ isset($interviews) && $interviews->interview_result == 'failed' ? 'selected' : '' }}>Failed</option>
                                    </select>
                                </div>

                                <!-- Input Interviewer Name -->
                                <div class="mb-4">
                                    <label for="interviewer_name" class="block text-xs font-bold text-slate-400 uppercase">Interviewer Name</label>
                                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="interviewer_name" name="interviewer_name" value="{{ isset($interviews) ? $interviews->interviewer_name : '' }}" required>
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button type="submit" class="w-full bg-gradient-to-tl from-green-600 to-lime-400 text-white py-2 rounded-full hover:bg-green-700">
                                        Simpan
                                    </button>
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
