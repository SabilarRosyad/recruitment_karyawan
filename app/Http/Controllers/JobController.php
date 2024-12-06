<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $job = Job::paginate(10);

        return view('jobs/job', ['job' => $job]);
    }

    public function tambah()
    {
        return view('jobs.form');
    }

    public function simpan(Request $request)
    {
        Job::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'salary' => $request->salary,
            'status' => $request->status,
            'employment_type' => $request->employment_type,
            'experience_level' => $request->experience_level,
            'skills_required' => $request->skills_required
        ]);

        return redirect()->route('job');
    }

    public function edit($id)
    {
        $job = Job::find($id);

        return view('jobs.form', ['job' => $job]);
    }

    public function update($id, Request $request)
    {

        Job::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'salary' => $request->salary,
            'status' => $request->status,
            'employment_type' => $request->employment_type,
            'experience_level' => $request->experience_level,
            'skills_required' => $request->skills_required
        ]);

        return redirect()->route('job');
    }

    public function hapus($id)
    {
        Job::find($id)->delete();

        return redirect()->route('job');
    }

}
