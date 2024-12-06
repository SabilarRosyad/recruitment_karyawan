<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile.profile_user');
    }

    public function editProfile($id)
    {
        $user = User::find($id);

        return view('profile.edit_profile', ['user' => $user]);
    }

    public function updateProfile($id, Request $request)
{   
    // Validasi file image (hanya menerima JPG dan PNG)
    $request->validate([
        'image' => 'nullable|mimes:jpg,jpeg,png|max:2048', // Validasi file harus JPG, JPEG, atau PNG dengan ukuran maksimal 2MB
    ]);

    // Menyimpan nama file gambar
    $image_name = '';

    // Jika ada file gambar baru yang diupload
    if ($request->file('image')) {
        // Simpan gambar baru di folder 'images' pada disk 'public'
        $image_name = $request->file('image')->store('images', 'public');
    }

    // Update data pengguna, termasuk profile photo
    User::find($id)->update([
        'username' => $request->username,
        'email' => $request->email,
        'password' => $request->password ? bcrypt($request->password) : User::find($id)->password, // Hanya hash password jika ada perubahan
        'role' => $request->role,
        'profile_photo' => $image_name, // Simpan nama file foto profil
    ]);

    // Redirect kembali ke halaman profil setelah update
    return redirect()->route('profile.show', ['id' => $id])->with('success', 'Profile updated successfully.');
}



}
