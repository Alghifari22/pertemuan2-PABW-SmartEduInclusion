<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruModulController extends Controller
{
    public function store(Request $request)
    {
       $kode_modul = $request->input('kode_modul');
       $judul = $request->input('judul');
       $mata_pelajaran = $request->input('mata_pelajaran');
       $kelas = $request->input('kelas');

        return view('guru.guru-modul', compact('kode_modul', 'judul', 'mata_pelajaran', 'kelas'));
    }
}
