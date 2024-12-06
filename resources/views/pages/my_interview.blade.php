@extends('layouts.app_user')

@section('title', 'My Interview')

@section('content')
    <!-- Main content -->
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">My Interview Details</h2>

        @if($interviews->isEmpty())
            <p class="text-gray-500">You haven't interviewed for any jobs yet.</p>
        @else
            @foreach ($interviews as $interview)
                <div class="bg-white p-6 rounded shadow-md mb-4">
                    <h3 class="text-xl font-semibold mb-4">Application for Interview: {{ $interview->application->job->title }}</h3>
                    <div class="space-y-4">
                        <p><strong>Nama User: </strong>{{ $interview->application->user->username }}</p>
                        <p><strong>Nama Pekerjaan: </strong>{{ $interview->application->job->title }}</p>
                        <h3><strong>Interview pada: </strong>{{ $interview->interview_date }}</h3>
                        <p><strong>Mode: </strong>{{ $interview->interview_mode }}</p>
                        <p><strong>Hasil: </strong>{{ $interview->interview_result }}</p>
                        <p><strong>Interviewer: </strong>{{ $interview->interviewer_name }}</p>
                    </div>
                </div>
            @endforeach

            <!-- Tampilkan link pagination -->
            <div class="mt-6">
                {{ $interviews->links() }}
            </div>
        @endif
    </div>
@endsection