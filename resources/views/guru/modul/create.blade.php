@extends('layouts.guru', ['title' => 'Tambah Modul - SmartEdu'])

@section('content')
<div class="mx-auto max-w-5xl pb-12">
    <a href="/guru/modul" class="inline-flex items-center gap-2 text-sm font-medium text-slate-600 transition hover:text-blue-700">
        <i data-lucide="arrow-left" class="h-4 w-4"></i>Kembali ke manajemen modul
    </a>
    <div class="mt-8 max-w-3xl">
        @include('partials.page-header', [
            'eyebrow' => 'Manajemen modul',
            'heading' => 'Tambah modul baru',
            'description' => 'Lengkapi informasi dasar modul agar dapat digunakan dalam kegiatan belajar.',
        ])
    </div>

    <form method="POST" action="/guru/modul" class="mt-8 max-w-3xl overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        @csrf
        <div class="border-b border-slate-200 px-6 py-5 sm:px-8">
            <h2 class="font-semibold">Informasi modul</h2>
            <p class="mt-1 text-sm text-slate-500">Semua kolom wajib diisi.</p>
        </div>
        <div class="grid gap-5 px-6 py-7 sm:grid-cols-2 sm:px-8">
            <div class="sm:col-span-2"><label for="judul" class="mb-2 block text-sm font-medium">Judul modul</label><input id="judul" name="judul" required placeholder="Contoh: Bilangan Dasar" class="h-12 w-full rounded-lg border border-slate-300 px-4 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"></div>
            <div><label for="kode_modul" class="mb-2 block text-sm font-medium">Kode modul</label><input id="kode_modul" name="kode_modul" required placeholder="Contoh: MOD-003" class="h-12 w-full rounded-lg border border-slate-300 px-4 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"></div>
            <div><label for="kelas" class="mb-2 block text-sm font-medium">Kelas</label><input id="kelas" name="kelas" required placeholder="Contoh: Kelas 4" class="h-12 w-full rounded-lg border border-slate-300 px-4 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"></div>
            <div class="sm:col-span-2"><label for="mata_pelajaran" class="mb-2 block text-sm font-medium">Mata pelajaran</label><input id="mata_pelajaran" name="mata_pelajaran" required placeholder="Contoh: Matematika" class="h-12 w-full rounded-lg border border-slate-300 px-4 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"></div>
        </div>
        <div class="flex flex-col-reverse gap-3 border-t border-slate-200 bg-slate-50 px-6 py-5 sm:flex-row sm:justify-end sm:px-8">
            <a href="/guru/modul" class="inline-flex h-11 items-center justify-center rounded-lg border border-slate-300 bg-white px-5 text-sm font-semibold text-slate-700 hover:bg-slate-100">Batal</a>
            <button type="submit" class="inline-flex h-11 items-center justify-center rounded-lg bg-blue-600 px-5 text-sm font-semibold text-white hover:bg-blue-700">Simpan modul</button>
        </div>
    </form>
</div>
@endsection
