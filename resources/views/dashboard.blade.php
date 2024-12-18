@extends('layouts.app')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <!-- Full width card for Recruitment Info -->
            <div class="w-full px-3 mb-6">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-6">
                        <h3 class="text-3xl font-bold text-gray-800 mb-4">Recruitment Process</h3>
                        <p class="text-lg text-gray-600 mb-4">
                            At our company, we ensure a transparent and efficient recruitment process. Here are the main steps:
                        </p>

                        <ul class="list-disc pl-5 text-gray-600">
                            <li>Submit your application online via our portal.</li>
                            <li>Participate in an initial phone or video interview.</li>
                            <li>Attend a second round of interviews with the hiring team.</li>
                            <li>Complete any technical tests required for the position.</li>
                            <li>Receive the final job offer and negotiate the terms.</li>
                        </ul>

                        <p class="mt-4 text-gray-600">
                            We believe in treating every applicant with respect and providing a seamless experience throughout the hiring process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
