<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Memfilter data admin yang memiliki role 'admin' dan mem-paginate dengan 10 per halaman
        $user = User::where('role', 'user')->paginate(10);

        return view('user/user', ['user' => $user]);
    }

    public function tambah()
    {
        return view('user.form');
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

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Enkripsi password
            'profile_photo' => $image_name,
            'role' => 'user'
        ]);

        return redirect()->route('user');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('user.form', ['user' => $user]);
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

        User::find($id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'password' => ($request->password),
            'role' => $request->role,
            'profile_photo' => $image_name,
        ]);

        return redirect()->route('user');
    }

    public function hapus($id)
    {
        User::find($id)->delete();

        return redirect()->route('user');
    }
}
