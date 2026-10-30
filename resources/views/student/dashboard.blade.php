@extends('layouts.student', ['title' => 'Dashboard Siswa - SmartEdu'])
@section('content')
    <div class="mx-auto max-w-6xl pb-12">
        @include('partials.page-header', [
            'heading' => 'Halo, Siswa!',
            'description' => 'Selamat datang kembali. Yuk lanjutkan belajar hari ini.',
        ])<section class="mt-10 rounded-2xl bg-blue-600 p-7 text-white">
            <p class="text-blue-100">Progres belajar minggu ini</p><strong class="mt-2 block text-5xl">68%</strong>
            <div class="mt-5 h-3 rounded-full bg-blue-400">
                <div class="h-full w-2/3 rounded-full bg-white"></div>
            </div>
        </section>
        <h2 class="mt-10 text-2xl font-bold">Materi terbaru</h2>
        <div class="mt-5 grid gap-5 md:grid-cols-2">
            @forelse($materials as $material)
                <a href="/siswa/materi/{{ $material['kode'] }}"
                    class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <p class="text-sm font-semibold text-blue-600">{{ $material['kode'] }}</p>
                    <h3 class="mt-2 text-xl font-bold">{{ $material['judul'] }}</h3>
                    <p class="mt-3 text-slate-600">{{ $material['progres'] }} selesai</p>
            </a>@empty<x-alert type="info">Belum ada materi terbaru.</x-alert>
            @endforelse
        </div>
    </div>
@endsection
