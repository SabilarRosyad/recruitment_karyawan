<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function index()
    {
        $application = Application::paginate(10);

        return view('application/application', ['application' => $application]);
    }

    public function tambah($jobId)
    {
        $job = Job::findOrFail($jobId);

        // Kirim data pekerjaan ke view
        return view('pages.apply', compact('job'));
    }

    public function simpan(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'cv' => 'nullable|file|mimes:pdf|max:2048', // CV harus file valid
            'cv_link' => 'nullable|string', // CV juga bisa berupa link
            'portofolio' => 'nullable|file|mimes:pdf,pptx|max:2048', // Portofolio sebagai file
            'portofolio_link' => 'nullable|string', // Portofolio juga bisa berupa link
            'status' => 'required|string',
            'user_id' => 'required|integer',
            'job_id' => 'required|integer',
        ]);

        // Validasi kustom: Setidaknya salah satu CV atau Portofolio harus diisi
        if (
            (!$request->hasFile('cv') && !$request->cv_link) &&
            (!$request->hasFile('portofolio') && !$request->portofolio_link)
        ) {
            return redirect()->back()
                ->withErrors(['cv' => 'Please provide a CV or CV link.', 'portofolio' => 'Please provide a Portfolio or Portfolio link.'])
                ->withInput();
        }

        // Inisialisasi variabel untuk menyimpan path
        $cvPath = null;
        $portofolioPath = null;

        // Simpan file CV jika ada
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            $cvPath = $cv->storeAs('cv', uniqid() . '_' . $cv->getClientOriginalName(), 'public'); // Simpan file dengan nama unik
        } elseif ($request->cv_link) {
            $cvPath = $request->cv_link; // Gunakan link jika tidak ada file
        }

        // Simpan file Portofolio jika ada
        if ($request->hasFile('portofolio')) {
            $portofolio = $request->file('portofolio');
            $portofolioPath = $portofolio->storeAs('portofolio', uniqid() . '_' . $portofolio->getClientOriginalName(), 'public'); // Simpan file dengan nama unik
        } elseif ($request->portofolio_link) {
            $portofolioPath = $request->portofolio_link; // Gunakan link jika tidak ada file
        }

        // Simpan data aplikasi ke database
        Application::create([
            'cv' => $cvPath, // Path file CV atau link
            'portofolio' => $portofolioPath, // Path file Portofolio atau link
            'status' => $validated['status'],
            'user_id' => $validated['user_id'],
            'job_id' => $validated['job_id'],
        ]);

        // Redirect dengan logika role pengguna
        return auth()->user()->role == 'user'
            ? redirect()->route('job.details', ['id' => $validated['job_id']])->with('success', 'Application submitted successfully.')
            : redirect()->route('application')->with('success', 'Application submitted successfully.');
    }

    public function edit($id)
    {
        $application = Application::find($id);

        return view('application.form', ['application' => $application]);
    }

    public function update($id, Request $request)
    {
        $application = Application::find($id);

        // Handle file upload for CV
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cv', 'public');  // Simpan di storage/app/public/cv
            $application->cv = $cvPath;
        } elseif ($request->cv_link) {
            $application->cv = $request->cv_link;
        }

        // Handle file upload for Portfolio
        if ($request->hasFile('portofolio')) {
            $portofolioPath = $request->file('portofolio')->store('portofolio', 'public');  // Simpan di storage/app/public/portofolio
            $application->portofolio = $portofolioPath;
        } elseif ($request->portofolio_link) {
            $application->portofolio = $request->portofolio_link;
        }

        // Update other fields
        $application->status = $request->status;
        $application->user_id = $request->user_id;
        $application->job_id = $request->job_id;

        $application->save();

        return redirect()->route('application');
    }

    public function hapus($id)
    {
        $application = Application::find($id);

        // Hapus file CV dan Portofolio jika ada
        if ($application->cv && !filter_var($application->cv, FILTER_VALIDATE_URL)) {
            Storage::delete('public/' . $application->cv);
        }

        if ($application->portofolio && !filter_var($application->portofolio, FILTER_VALIDATE_URL)) {
            Storage::delete('public/' . $application->portofolio);
        }

        // Hapus aplikasi
        $application->delete();

        return redirect()->route('application');
    }
}
