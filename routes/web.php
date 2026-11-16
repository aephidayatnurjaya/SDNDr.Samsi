<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - SDN Dr. Samsi (View & Routing Only)
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Beranda
Route::get('/', function () {
    return view('frontend.welcome');
})->name('beranda');

// Tentang Kami
Route::get('profile-sekolah', function () {
    return view('frontend.content.profileSekolah');
})->name('profile.sekolah');

Route::get('visi-dan-misi', function () {
    return view('frontend.content.visimisi');
})->name('visimisi.sekolah');

// Program & Kegiatan
Route::get('program/{slug?}', function ($slug = 'kurikulum-merdeka') {
    return view('frontend.program.jurusan.show', compact('slug'));
})->name('program');

Route::get('kegiatan/{slug?}', function ($slug = 'pramuka') {
    return view('frontend.program.kegiatan.show', compact('slug'));
})->name('kegiatan');

// Berita
Route::get('berita', function () {
    return view('frontend.content.beritaAll');
})->name('berita');

Route::get('berita/{slug?}', function ($slug = 'penerimaan-peserta-didik-baru') {
    return view('frontend.content.showBerita', compact('slug'));
})->name('detail.berita');

// Event
Route::get('event', function () {
    return view('frontend.content.event.eventAll');
})->name('event');

Route::get('event/{slug?}', function ($slug = 'upacara-hari-guru-nasional') {
    return view('frontend.content.event.detailEvent', compact('slug'));
})->name('detail.event');

// PPDB
Route::get('ppdb', function () {
    return view('frontend.content.ppdb');
})->name('ppdb');

Route::get('register', function () {
    return view('frontend.content.ppdb');
})->name('register');

// Login & Redirect Berdasarkan Peran (Guru / Murid / Admin)
Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', function (Request $request) {
    $role = strtolower($request->input('role', 'guru'));
    $email = strtolower($request->input('email', ''));

    if ($role === 'murid' || str_contains($email, 'murid') || str_contains($email, 'siswa')) {
        return redirect()->route('dashboard.murid');
    }

    if ($role === 'admin' || str_contains($email, 'admin') || str_contains($email, 'kepsek')) {
        return redirect()->route('home');
    }

    return redirect()->route('dashboard.guru');
});

// Dashboard Guru, Murid & Admin
Route::get('dashboard/guru', function () {
    return view('frontend.content.dashboardGuru');
})->name('dashboard.guru');

Route::get('dashboard/murid', function () {
    return view('frontend.content.dashboardMurid');
})->name('dashboard.murid');

Route::get('home', function () {
    return view('frontend.content.dashboard');
})->name('home');

Route::post('logout', function () {
    return redirect()->route('beranda');
})->name('logout');