<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Memfilter data admin yang memiliki role 'admin' dan mem-paginate dengan 10 per halaman
        $admin = Admin::where('role', 'admin')->paginate(10);

        return view('admin/admin', ['admin' => $admin]);
    }

    public function tambah()
    {
        return view('admin.form');
    }

    public function simpan(Request $request)
    {
        // Validasi file image (hanya menerima JPG dan PNG)
        $request->validate([
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2048', // Validasi file harus JPG, JPEG, atau PNG dengan maksimal ukuran 2MB
        ]);

        $image_name = '';
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Enkripsi password
            'profile_photo' => $image_name,
            'role' => 'admin'
        ]);

        return redirect()->route('admin');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);

        return view('admin.form', ['admin' => $admin]);
    }

    public function update($id, Request $request)
    {
        // Validasi file image (hanya menerima JPG dan PNG)
        $request->validate([
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2048', // Validasi file harus JPG, JPEG, atau PNG dengan maksimal ukuran 2MB
        ]);

        $image_name = '';
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        Admin::find($id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Enkripsi password
            'role' => $request->role,
            'profile_photo' => $image_name,
        ]);

        return redirect()->route('admin');
    }

    public function hapus($id)
    {
        Admin::find($id)->delete();

        return redirect()->route('admin');
    }
}
