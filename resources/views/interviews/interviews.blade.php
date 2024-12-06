@extends('layouts.app')

@section('title', 'Index Interviews')

@section('content')
<main class="ease-soft-in-out relative h-full max-h-screen rounded-xl transition-all duration-200">
  <div class="w-full px-6 py-6"> <!-- Removed 'mx-auto' -->
    <!-- Table container -->
    <div class="flex flex-wrap">
      <div class="flex-none w-full px-3"> <!-- Removed 'max-w-full' to avoid centering -->
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
            <h6>Data Interview</h6>
            <div class="flex justify-end mb-3">
                <a href="{{ route('interviews.tambah') }}">
                    <button class="bg-gradient-to-tl from-green-600 to-lime-400 px-4 py-2 rounded-full inline-flex items-center text-xs font-bold text-white">
                        <i class="fas fa-plus"></i>&nbsp;Tambah Interviews
                    </button>
                </a>
            </div>
          </div>
          <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
              <table class="items-center w-full mb-0 text-slate-500 border-gray-200"> <!-- Removed 'align-top' -->
                <thead class="align-bottom">
                  <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No Application</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Tanggal Interview</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Mode Interview</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Hasil</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama Pewawancara</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                  </tr>
                </thead>
                <tbody>
                @php($no = 1)
                  @foreach ($interviews as $row)
                    <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-4 py-1">
                          <div>
                            <!-- Menentukan nomor urut dengan cara menambahkan offset sesuai halaman -->
                            <p class="mb-0 text-xs leading-tight text-slate-400">
                              {{ ($interviews->currentPage() - 1) * $interviews->perPage() + $loop->iteration }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight text-slate-400">{{ $row->application_id }}</span>
                      </td>
                      <td class="p-2 pl-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-xs leading-tight text-slate-400">{{ $row->interview_date }}</p>
                      </td>
                      <td class="p-2 pl-12 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs leading-tight text-slate-400">{{ $row->interview_mode }}</p>
                      </td>
                      <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $row->interview_result }}</p>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight text-slate-400">{{ $row->interviewer_name }}</span>
                      </td>
                      <td class="p-2 pl-8 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <a href="{{ route('interviews.edit', $row->id) }}" class="text-xs font-semibold leading-tight text-slate-400"> <img src="{{ asset('icons/pen.svg') }}" alt="Edit Icon" class="w-4 h-4 inline-block" /> 
                          Edit   
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0);" class="text-red-500 text-xs font-semibold leading-tight ml-3" onclick="showDeleteModal({{ $row->id }});"> <img src="{{ asset('icons/trash.svg') }}" alt="Delete Icon" class="w-4 h-4 inline-block" /> 
                              Hapus 
                        </a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pagination mt-4 text-center">
      {{ $interviews->links() }}
    </div>
</main>

<!-- Modal Konfirmasi Hapus -->
<div id="deleteModal" class="hidden">
  <div class="modal-content">
    <h2>Konfirmasi Hapus</h2>
    <p>Apakah kamu ingin menghapus item ini?</p>
    <div class="mt-6 flex justify-center">
      <button onclick="confirmDelete()" class="bg-red-500 hover:bg-red-600 text-black font-bold py-2 px-4 rounded mr-2">Iya</button>
      <button onclick="closeDeleteModal()" class="bg-gray-300 hover:bg-gray-400 text-black font-bold py-2 px-4 rounded">Tidak</button>
    </div>
  </div>
</div>

<!-- Link ke modal.css dan modal.js -->
<link rel="stylesheet" href="{{ asset('css/modal.css') }}">
<script src="{{ asset('js/modal.js') }}" defer></script>
@endsection
