@extends('layouts.app')

@section('title', 'Form Edit Application')

@section('content')
<main class="ease-soft-in-out relative h-full max-h-screen rounded-xl transition-all duration-200">
    <div class="w-full px-6 py-6">
        <div class="flex flex-wrap">
            <div class="flex-none w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                        <h6 class="text-lg font-bold text-slate-700">Edit Application</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-6 overflow-x-auto">
                            <!-- Form untuk mengupdate aplikasi -->
                            <form action="{{ route('application.update', $application->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Menggunakan method PUT untuk update -->

                                <!-- User ID -->
                                <div class="mb-4">
                                    <label for="user_id" class="block text-xs font-bold text-slate-400 uppercase">User Id</label>
                                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="user_id" name="user_id" value="{{ old('user_id', $application->user_id) }}" readonly>
                                </div>

                                <!-- Job ID -->
                                <div class="mb-4">
                                    <label for="job_id" class="block text-xs font-bold text-slate-400 uppercase">Job Id</label>
                                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="job_id" name="job_id" value="{{ old('job_id', $application->job_id) }}" readonly>
                                </div>

                                <!-- CV -->
                                <div class="mb-4">
                                    <label for="cv" class="block text-xs font-bold text-slate-400 uppercase">CV</label>
                                    <div class="flex gap-4">
                                        <input type="file" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="cv" name="cv">
                                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="cv_link" name="cv_link" placeholder="Enter CV link" value="{{ old('cv_link', $application->cv) }}">
                                    </div>
                                    @if($application->cv && !filter_var($application->cv, FILTER_VALIDATE_URL))
                                        <p class="text-sm text-gray-500 mt-2">Current CV: <a href="{{ asset('storage/' . $application->cv) }}" target="_blank">View CV</a></p>
                                    @elseif($application->cv && filter_var($application->cv, FILTER_VALIDATE_URL))
                                        <p class="text-sm text-gray-500 mt-2">Current CV Link: <a href="{{ $application->cv }}" target="_blank">View CV</a></p>
                                    @endif
                                </div>

                                <!-- Portofolio -->
                                <div class="mb-4">
                                    <label for="portofolio" class="block text-xs font-bold text-slate-400 uppercase">Portofolio</label>
                                    <div class="flex gap-4">
                                        <input type="file" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="portofolio" name="portofolio">
                                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="portofolio_link" name="portofolio_link" placeholder="Enter Portfolio link" value="{{ old('portofolio_link', $application->portofolio) }}">
                                    </div>
                                    @if($application->portofolio && !filter_var($application->portofolio, FILTER_VALIDATE_URL))
                                        <p class="text-sm text-gray-500 mt-2">Current Portfolio: 
                                            <a href="{{ asset('storage/' . $application->portofolio) }}" target="_blank">View Portfolio</a>
                                        </p>
                                    @elseif($application->portofolio && filter_var($application->portofolio, FILTER_VALIDATE_URL))
                                        <p class="text-sm text-gray-500 mt-2">Current Portfolio Link: 
                                            <a href="{{ $application->portofolio }}" target="_blank">View Portfolio</a>
                                        </p>
                                    @endif
                                </div>

                                <!-- Status -->
                                <div class="mb-4">
                                    <label for="status" class="block text-xs font-bold text-slate-400 uppercase">Status</label>
                                    <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-300 focus:border-blue-500" id="status" name="status">
                                        <option value="pending" {{ old('status', $application->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="reviewed" {{ old('status', $application->status) == 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                                        <option value="accepted" {{ old('status', $application->status) == 'accepted' ? 'selected' : '' }}>Accepted</option>
                                        <option value="rejected" {{ old('status', $application->status) == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                    </select>
                                </div>

                                <div>
                                    <button type="submit" class="w-full bg-gradient-to-tl from-green-600 to-lime-400 text-white py-2 rounded-full hover:bg-blue-600">
                                        Update Application
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
