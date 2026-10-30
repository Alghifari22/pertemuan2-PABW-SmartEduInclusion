<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard', ['materials' => [
            ['kode' => 'MAT-01', 'judul' => 'Pengenalan Matematika Dasar', 'progres' => '75%'],
            ['kode' => 'IPA-02', 'judul' => 'Makhluk Hidup di Sekitar Kita', 'progres' => '40%'],
        ]]);
    }

    public function materi()
    {
        return view('student.materi', ['materials' => [
            ['kode' => 'MAT-01', 'judul' => 'Pengenalan Matematika Dasar', 'deskripsi' => 'Materi dasar untuk memahami angka dan operasi hitung.'],
            ['kode' => 'IPA-02', 'judul' => 'Makhluk Hidup di Sekitar Kita', 'deskripsi' => 'Kenali berbagai makhluk hidup di lingkungan sekitar.'],
        ]]);
    }

    public function detailMateri($kodeMateri)
    {
        return view('student.detail-materi', ['kodeMateri' => $kodeMateri, 'judul' => 'Pengenalan Matematika Dasar']);
    }

    public function latihan()
    {
        return view('student.latihan', ['exercises' => [
            ['kode' => 'MAT-01', 'judul' => 'Latihan Matematika Dasar', 'jumlah' => '10 soal pilihan ganda.'],
            ['kode' => 'IPA-02', 'judul' => 'Latihan Ilmu Pengetahuan Alam', 'jumlah' => '10 soal pilihan ganda.'],
        ]]);
    }

    public function detailLatihan($kodeMateri)
    {
        return view('student.detail-latihan', ['kodeMateri' => $kodeMateri, 'questions' => ['Berapakah hasil dari 2 + 2?', 'Manakah angka terbesar?']]);
    }
}
