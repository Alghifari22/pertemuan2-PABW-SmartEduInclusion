<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function dashboard()
    {
        return view('staff.dashboard', ['summary' => [
            ['value' => 124, 'label' => 'Total Pengguna'],
            ['value' => 8, 'label' => 'Total Kelas'],
            ['value' => 12, 'label' => 'Mata Pelajaran'],
        ]]);
    }

    public function pengguna()
    {
        return view('staff.pengguna', ['users' => $this->userRows()]);
    }

    public function storePengguna(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150', 'unique:users,email'],
            'role' => ['required', 'in:Staff TU,Guru,Siswa,Orang Tua'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
            'password' => Hash::make($validated['password']),
        ]);

        return view('staff.pengguna', [
            'users' => $this->userRows(),
            'success' => 'Pengguna berhasil ditambahkan.',
        ]);
    }

    private function userRows(): array
    {
        return User::query()->orderBy('id')->get()->map(fn (User $user) => [
            'id' => $user->id,
            'nama' => $user->name,
            'email' => $user->email,
            'peran' => $user->role,
        ])->all();
    }

    public function kelas()
    {
        return view('staff.kelas', ['classes' => [['kode' => 'KLS-4A', 'nama' => 'Kelas 4A'], ['kode' => 'KLS-5A', 'nama' => 'Kelas 5A']]]);
    }

    public function mapel()
    {
        return view('staff.mapel', ['subjects' => [['kode' => 'MAT', 'nama' => 'Matematika'], ['kode' => 'IPA', 'nama' => 'Ilmu Pengetahuan Alam']]]);
    }
}
