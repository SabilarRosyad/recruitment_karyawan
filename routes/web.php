<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\InterviewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSimpan')->name('register.simpan');

    Route::get('/', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});



Route::controller(AdminController::class)->prefix('admin')->group(function () {
    Route::get('', 'index')->name('admin');
    Route::get('tambah', 'tambah')->name('admin.tambah');
    Route::post('tambah', 'simpan')->name('admin.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('admin.edit');
    Route::post('edit/{id}', 'update')->name('admin.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('admin.hapus');
});

Route::controller(UserController::class)->prefix('user')->group(function () {
    Route::get('', 'index')->name('user');
    Route::get('tambah', 'tambah')->name('user.tambah');
    Route::post('tambah', 'simpan')->name('user.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('user.edit');
    Route::post('edit/{id}', 'update')->name('user.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('user.hapus');
});

Route::controller(JobController::class)->prefix('job')->group(function () {
    Route::get('', 'index')->name('job');
    Route::get('tambah', 'tambah')->name('job.tambah');
    Route::post('tambah', 'simpan')->name('job.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('job.edit');
    Route::post('edit/{id}', 'update')->name('job.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('job.hapus');
/*     Route::get('search', 'search')->name('job.search'); // Route pencarian */
});


Route::controller(ApplicationController::class)->prefix('application')->group(function () {
    // Rute untuk daftar aplikasi
    Route::get('', 'index')->name('application');
    Route::get('tambah/{id}', 'tambah')->name('application.tambah');
    Route::post('tambah', 'simpan')->name('application.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('application.edit');
    Route::put('edit/{id}', 'update')->name('application.update');
    Route::get('hapus/{id}', 'hapus')->name('application.hapus');
});


Route::controller(InterviewsController::class)->prefix('interviews')->group(function () {
    Route::get('', 'index')->name('interviews');
    Route::get('tambah', 'tambah')->name('interviews.tambah');
    Route::post('tambah', 'simpan')->name('interviews.simpan');
    Route::get('edit/{id}', 'edit')->name('interviews.edit');
    Route::put('edit/{id}', 'update')->name('interviews.update');  // Menggunakan PUT untuk update
    Route::get('hapus/{id}', 'hapus')->name('interviews.hapus');
});

Route::controller(HomeController::class)->prefix('home')->group(function () {
    Route::get('', 'index')->name('home');
    Route::get('job/search', 'search')->name('job.search');
    Route::get('job/details/{id}', 'details')->name('job.details');
    Route::get('my-applications', 'showApplications')->name('my_applications');
    Route::get('my-interviews', 'showInterviews')->name('my_interviews');
});

Route::controller(ProfileController::class)->prefix('profile')->group(function () {
    Route::get('', 'show')->name('profile.show'); 
    Route::get('edit/{id}', 'editProfile')->name('profile.edit'); 
    Route::put('update/{id}', 'updateProfile')->name('profile.update'); 
});




/* Route::get('/', function () {
    return view('home');
}); */



Route::get('/jobs#Job', function () {
    return view('home');
})->name('jobs_available');


Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us'); 

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us'); 


Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* Route::middleware('auth')->group(function () {
    Route::get('home', function () {
        return view('home');
    })->name('home');
}); */

