<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\GuruModulController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware('auth')->group(function () {
    Route::get('/guru/dashboard', fn () => app(GuruController::class)->dashboard());
    Route::get('/guru/modul', fn () => app(GuruModulController::class)->index());
    Route::get('/guru/modul/tambah', fn () => view('guru.modul.create'));
    Route::post('/guru/modul', [GuruModulController::class, 'store'])->name('modul.store');
    Route::get('/guru/materi', fn () => app(GuruController::class)->materi());
    Route::get('/guru/materi/{kodeMateri}', fn ($kodeMateri) => app(GuruController::class)->detailMateri($kodeMateri));
    Route::get('/guru/soal-latihan', fn () => app(GuruController::class)->soalLatihan());
    Route::get('/guru/laporan', fn () => app(GuruController::class)->laporan());
    Route::get('/staff-tu/dashboard', fn () => app(StaffController::class)->dashboard());
    Route::get('/staff-tu/pengguna', fn () => app(StaffController::class)->pengguna());
    Route::post('/staff-tu/pengguna', [StaffController::class, 'storePengguna'])->name('staff.pengguna.store');
    Route::get('/staff-tu/kelas', fn () => app(StaffController::class)->kelas());
    Route::get('/staff-tu/mapel', fn () => app(StaffController::class)->mapel());
    Route::get('/siswa/dashboard', fn () => app(StudentController::class)->dashboard())->name('dashboard');
    Route::get('/siswa/materi', fn () => app(StudentController::class)->materi());
    Route::get('/siswa/materi/{kodeMateri}', fn ($kodeMateri) => app(StudentController::class)->detailMateri($kodeMateri));
    Route::get('/siswa/latihan', fn () => app(StudentController::class)->latihan());
    Route::get('/siswa/latihan/{kodeMateri}', fn ($kodeMateri) => app(StudentController::class)->detailLatihan($kodeMateri));
    Route::get('/orang-tua/dashboard', fn () => app(ParentController::class)->dashboard());
});

require __DIR__.'/auth.php';
