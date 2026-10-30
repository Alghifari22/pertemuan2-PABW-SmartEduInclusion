<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GuruModulController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('login');
});

Route::get('/guru/dashboard', function () {
    return app(GuruController::class)->dashboard();
});

Route::get('/guru/modul', function () {
    return app(GuruModulController::class)->index();
});

Route::get('/guru/modul/tambah', function () {
    return view('guru.modul.create');
});

Route::post('/guru/modul', [GuruModulController::class, 'store'])->name('modul.store');

Route::get('/guru/materi', function () {
    return app(GuruController::class)->materi();
});

Route::get('/guru/materi/{kodeMateri}', function ($kodeMateri) {
    return app(GuruController::class)->detailMateri($kodeMateri);
});

Route::get('/guru/soal-latihan', function () {
    return app(GuruController::class)->soalLatihan();
});

Route::get('/guru/laporan', function () {
    return app(GuruController::class)->laporan();
});

Route::get('/staff-tu/dashboard', function () {
    return app(StaffController::class)->dashboard();
});

Route::get('/staff-tu/pengguna', function () {
    return app(StaffController::class)->pengguna();
});

Route::post('/staff-tu/pengguna', [StaffController::class, 'storePengguna'])->name('staff.pengguna.store');

Route::get('/staff-tu/kelas', function () {
    return app(StaffController::class)->kelas();
});

Route::get('/staff-tu/mapel', function () {
    return app(StaffController::class)->mapel();
});

Route::get('/siswa/dashboard', function () {
    return app(StudentController::class)->dashboard();
});

Route::get('/siswa/materi', function () {
    return app(StudentController::class)->materi();
});

Route::get('/siswa/materi/{kodeMateri}', function ($kodeMateri) {
    return app(StudentController::class)->detailMateri($kodeMateri);
});

Route::get('/siswa/latihan', function () {
    return app(StudentController::class)->latihan();
});

Route::get('/siswa/latihan/{kodeMateri}', function ($kodeMateri) {
    return app(StudentController::class)->detailLatihan($kodeMateri);
});

Route::get('/orang-tua/dashboard', function () {
    return app(ParentController::class)->dashboard();
});
