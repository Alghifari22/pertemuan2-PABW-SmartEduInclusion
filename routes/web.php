<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruModulController;

Route::get('/', function () {
    return view('login');
});

Route::get('/guru/dashboard', function () {
    return view('guru.guru-dashboard');
});

Route::get('/guru/modul', function() {
    return view('guru.guru-modul');
});

Route::get('/guru/modul/tambah', function () {
    return view('guru.guru-modul-tambah');
});

Route::post('/guru/modul', [GuruModulController::class, 'store'])->name('modul.store');

Route::get('/guru/materi', function () {
    return view('guru.guru-materi');
});

Route::get('/guru/materi/{kodeMateri}', function () {
    return view('guru.guru-detail-materi');
});

Route::get('/guru/soal-latihan', function () {
    return view('guru.guru-soal-latihan');
});

Route::get('/guru/laporan', function () {
    return view('guru.guru-laporan');
});

Route::get('/staff-tu/dashboard', function () {
    return view('staff.staff-dashboard');
});

Route::get('/staff-tu/pengguna', function () {
    return view('staff.staff-pengguna');
});

Route::get('/staff-tu/kelas', function () {
    return view('staff.staff-kelas');
});

Route::get('/staff-tu/mapel', function () {
    return view('staff.staff-mapel');
});

Route::get('/siswa/dashboard', function () {
    return view('student.siswa-dashboard');
});

Route::get('/siswa/materi', function () {
    return view('student.siswa-materi');
});

Route::get('/siswa/materi/{kodeMateri}', function () {
    return view('student.siswa-detail-materi');
});

Route::get('/siswa/latihan', function () {
    return view('student.siswa-latihan');
});

Route::get('/siswa/latihan/{kodeMateri}', function () {
    return view('student.siswa-detail-latihan');
});

Route::get('/orang-tua/dashboard', function () {
    return view('parent.orang-tua-dashboard');
});
