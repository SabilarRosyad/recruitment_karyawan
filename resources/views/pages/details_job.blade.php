@extends('layouts.app_user')

@section('title', 'Details Job')

@section('content')
     <!-- Job Details Section -->
     <div class="container mx-auto p-6 mt-24">
        <!-- Job Title -->
        <h1 class="text-3xl font-semibold mb-4">{{ $job->title }}</h1>

        <!-- Job Details Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-bold mb-2">Job Details</h2>

            <!-- Job Description -->
            <p class="text-gray-700 mb-4">{{ $job->description }}</p>

            <!-- Additional Information -->
            <ul class="space-y-2">
                <li><strong>Location:</strong> {{ $job->location }}</li>
                <li><strong>Salary:</strong> {{ $job->salary }}</li>
                <li><strong>Status:</strong> {{ $job->status }}</li>
                <li><strong>Employment Type:</strong> {{ $job->employment_type }}</li>
                <li><strong>Experience Level:</strong> {{ $job->experience_level }}</li>
                <li><strong>Skills Required:</strong> {{ $job->skills_required }}</li>
                <li><strong>Posted on:</strong> {{ $job->created_at->format('F j, Y') }}</li>
                <!-- Add more job details here -->
            </ul>

            <!-- Apply Button -->
            <div class="mt-6">
                <a href="{{ route('application.tambah', ['id' => $job->id]) }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
@endsection