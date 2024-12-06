@extends('layouts.app_user')

@section('title', 'My Apply')

@section('content')
    <!-- Main content -->
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">My Application Details</h2>

        @if($applications->isEmpty())
            <p class="text-gray-500">You haven't applied for any jobs yet.</p>
        @else
            @foreach($applications as $application)
                <div class="bg-white p-6 rounded shadow-md mb-4">
                    <h3 class="text-xl font-semibold mb-4">Application for Job: {{ $application->job->title }}</h3>
                    <div class="space-y-4">
                        <p><strong>Location</strong> {{ $application->job->location }}</p>
                        <p><strong>Salary:</strong> {{ $application->job->salary }}</p>
                        <p><strong>Status:</strong> {{ $application->status }}</p>
                        <p><strong>Applied On:</strong> {{ $application->created_at->format('d M, Y') }}</p>
                    </div>
                </div>
            @endforeach

        <div class="mt-6">
            {{ $applications->links() }}
        </div>
        @endif
    </div>
@endsection