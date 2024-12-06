@extends('layouts.app_user')

@section('title', 'Home')

@section('content')
    <!-- Content Section -->
    <div id="content" class="pt-20">
        <!-- Background Section -->
        <div class="h-80 bg-cover bg-center flex flex-col items-center justify-center" style="background-image: url('{{ asset('images/bg.jpg') }}');">
            <h1 class="text-white text-xl font-bold mb-4">Cari Job di Winnicode</h1>
            <form action="{{ route('job.search') }}" method="GET" class="bg-white rounded-lg shadow-lg p-4 w-full sm:w-2/3 md:w-1/3">
                <div class="flex items-center">
                    <!-- Input Pencarian -->
                    <input 
                        type="text" 
                        name="query" 
                        placeholder="Cari Job..." 
                        class="w-full px-3 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                        value="{{ request('query') }}"/>
                    <button type="submit" class="bg-green-600 text-white rounded-r-lg px-4 hover:bg-green-700 transition duration-200 ml-2">
                        Search
                    </button>
                </div>
            </form>
        </div>

        <!-- Menampilkan Hasil Pencarian -->
        <div class="max-w-7xl mx-auto px-4 py-8">
            @if(isset($query) && $job->isEmpty())
                <p class="text-center text-lg text-gray-600">Tidak ada pekerjaan ditemukan untuk '{{ $query }}'.</p>
            @elseif(isset($query))
                <h2 class="text-2xl font-bold mb-6">Hasil Pencarian untuk '{{ $query }}'</h2>
            @else
                <h2 class="text-2xl font-bold mb-6" id="Job">Jobs Available</h2>
            @endif

            <!-- Grid layout untuk card pekerjaan -->
            <div id="job-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($job as $row)
                <div class="relative bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">{{ $row->title }}</h3>
                        <p class="text-gray-500">Location: {{ $row->location }}</p>
                        <p class="text-gray-500">Salary: {{ $row->salary }}</p>
                        <p class="text-gray-500">Status: {{ $row->status }}</p>
                        <p class="text-gray-500">Employment Type: {{ $row->employment_type }}</p>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="flex gap-4">
                            <a href="{{ route('job.details', $row->id) }}">
                                <button class="px-4 py-2 bg-white text-black font-semibold rounded hover:bg-gray-200">
                                    View Details
                                </button>
                            </a>
                            <a href="{{ route('application.tambah', $row->id) }}">
                                <button class="px-4 py-2 bg-white text-black font-semibold rounded hover:bg-gray-200">
                                    Apply
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @if($job->isEmpty())
            <p class="text-center text-lg text-gray-600">Tidak ada pekerjaan yang tersedia saat ini.</p>
            @endif

            <!-- Tombol Show More jika ada halaman berikutnya -->
            <!-- Tombol Show More jika ada halaman berikutnya -->
            @if ($job->hasMorePages())
                <div class="text-center mt-4">
                    <button id="show-more" 
                            class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600"
                            data-next-url="{{ $job->nextPageUrl() }}">
                        Show More
                    </button>
                </div>
            @endif
        </div>
    </div>
@endsection
