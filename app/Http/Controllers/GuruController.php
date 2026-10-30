<?php

namespace App\Http\Controllers;

class GuruController extends Controller
{
    public function dashboard()
    {
        return view('guru.dashboard', [
            'progress' => 75,
            'studentsFinished' => 15,
            'studentsTotal' => 20,
            'studentsBehind' => 5,
            'gradedExercises' => 12,
            'students' => [
                ['nama' => 'Siti Aisyah', 'status' => 'Selesai', 'skor' => 92],
                ['nama' => 'Budi Santoso', 'status' => '65%', 'skor' => 78],
                ['nama' => 'Andi Pratama', 'status' => '35%', 'skor' => 'N/A'],
                ['nama' => 'Rina Permata', 'status' => 'Selesai', 'skor' => 88],
            ],
        ]);
    }

    public function materi()
    {
        return view('guru.materi.index', ['materials' => [
            ['kode' => 'MAT-01', 'judul' => 'Pengenalan Matematika Dasar', 'modul' => 'Bilangan Dasar', 'kelas' => 'Kelas 4'],
            ['kode' => 'IPA-02', 'judul' => 'Makhluk Hidup di Sekitar Kita', 'modul' => 'Makhluk Hidup', 'kelas' => 'Kelas 5'],
        ]]);
    }

    public function detailMateri($kodeMateri)
    {
        return view('guru.materi.detail', [
            'kodeMateri' => $kodeMateri,
            'pages' => [
                ['urutan' => 1, 'judul' => 'Pengenalan Materi', 'isi' => 'Materi pengantar untuk siswa.'],
                ['urutan' => 2, 'judul' => 'Contoh dalam Kehidupan', 'isi' => 'Contoh penerapan materi dalam kehidupan sehari-hari.'],
            ],
        ]);
    }

    public function soalLatihan()
    {
        return view('guru.soal-latihan.index', ['questions' => [
            ['kode' => 'SOAL-001', 'pertanyaan' => 'Berapakah hasil 2 + 2?', 'materi' => 'MAT-01', 'kunci' => 'A'],
            ['kode' => 'SOAL-002', 'pertanyaan' => 'Planet tempat kita tinggal adalah...', 'materi' => 'IPA-02', 'kunci' => 'B'],
        ]]);
    }

    public function laporan()
    {
        return view('guru.laporan', ['reports' => [
            ['kelas' => 'Kelas 4A', 'siswa' => 20, 'progres' => '75%', 'nilai' => 84],
            ['kelas' => 'Kelas 5A', 'siswa' => 18, 'progres' => '68%', 'nilai' => 81],
        ]]);
    }
}
