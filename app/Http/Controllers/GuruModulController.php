<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class GuruModulController extends Controller
{
    public function index()
    {
        $modules = Module::all();

        return view('guru.modul.index', compact('modules'));
    }

    public function store(Request $request)
    {

        $module = Module::create($request->all());

        return view('guru.modul.index', [
            'modules' => $module,
            'success' => 'Modul berhasil ditambahkan.',
        ]);
    }
}
