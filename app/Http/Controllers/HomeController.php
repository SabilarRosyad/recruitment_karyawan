<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Application;
use App\Models\Interviews;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data pekerjaan dengan paginasi, 6 pekerjaan per halaman
        $job = Job::paginate(6);  // Menggunakan paginate(6) untuk paginasi

        // Mengirim data ke view 'home' dengan variabel 'job'
        return view('home', ['job' => $job]);
    }

    public function details($id)
    {
        // Mengambil data pekerjaan berdasarkan ID menggunakan find()
        $job = Job::find($id);
    
        // Memeriksa apakah pekerjaan ditemukan, jika tidak kembalikan halaman 404
        if (!$job) {
            abort(404, 'Job not found');
        }
    
        // Mengirim data ke view 'details_job' menggunakan array asosiatif
        return view('pages/details_job', ['job' => $job]);
    }

    public function search(Request $request)
    {
        // Ambil query pencarian dari parameter 'query'
        $query = $request->input('query');

        // Cari pekerjaan berdasarkan title yang cocok dengan query
        $job = Job::where('title', 'like', '%' . $query . '%')->get();

        // Kirim hasil pencarian ke view 'home'
        return view('home', compact('job'));
    }

    public function showApplications()
    {
        // Ambil semua aplikasi yang terkait dengan pengguna yang sedang login, dengan pagination
        $applications = Application::where('user_id', auth()->id())->paginate(10); // 10 item per halaman
        
        // Kirim data aplikasi ke view
        return view('pages.my_apply', ['applications' => $applications]);
    }

    public function showInterviews()
    {
        // Ambil data interview berdasarkan user_id pengguna yang sedang login, dengan pagination
        $interviews = Interviews::with(['application', 'application.user', 'application.job'])
            ->whereHas('application', function ($query) {
                $query->where('user_id', auth()->id());
            })
            ->paginate(10); // 10 item per halaman

        // Kirim data ke view
        return view('pages.my_interview', compact('interviews'));
    }

}