<?php

namespace App\Http\Controllers;

use App\Models\Interviews;
use App\Models\Application;
use Illuminate\Http\Request;

class InterviewsController extends Controller
{
    public function index()
    {
        $interviews = Interviews::paginate(10);

        return view('interviews/interviews', ['interviews' => $interviews]);
    }

    public function tambah()
    {
        // Ambil semua aplikasi yang tersedia
        $applications = Application::all();

        // Kirim data aplikasi ke view
        return view('interviews.form', ['applications' => $applications]);
    }


    public function simpan(Request $request)
    {
        Interviews::create([
            'application_id' => $request->application_id,
            'interview_date' => $request->interview_date,
            'interview_mode' => $request->interview_mode,
            'interview_result' => $request->interview_result,
            'interviewer_name' => $request->interviewer_name
        ]);

        return redirect()->route('interviews');
    }

    public function edit($id)
    {
        $interviews = Interviews::find($id);
        $applications = Application::all(); // Ambil semua data dari tabel applications

        return view('interviews.form', [
            'interviews' => $interviews,
            'applications' => $applications
        ]);
    }

    public function update($id, Request $request)
    {

        Interviews::find($id)->update([
            'application_id' => $request->application_id,
            'interview_date' => $request->interview_date,
            'interview_mode' => $request->interview_mode,
            'interview_result' => $request->interview_result,
            'interviewer_name' => $request->interviewer_name
        ]);

        return redirect()->route('interviews');
    }

    public function hapus($id)
    {
        Interviews::find($id)->delete();

        return redirect()->route('interviews');
    }
}
