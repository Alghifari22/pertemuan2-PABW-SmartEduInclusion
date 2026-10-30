@extends('layouts.student', ['title' => 'Materi Belajar - SmartEdu'])
@section('content')
    <div class="mx-auto max-w-6xl pb-12">
        @include('partials.page-header', [
            'heading' => 'Daftar Materi Belajar',
            'description' => 'Pilih materi untuk mulai belajar dan tingkatkan pemahamanmu.',
        ])<div class="mt-8 grid gap-5 md:grid-cols-2">
            @forelse($materials as $material)
                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm"><span
                        class="rounded-full bg-blue-100 px-3 py-1 text-sm text-blue-700">{{ $material['kode'] }}</span>
                    <h2 class="mt-6 text-xl font-bold">{{ $material['judul'] }}</h2>
                    <p class="mt-2 text-slate-600">{{ $material['deskripsi'] }}</p><a
                        href="/siswa/materi/{{ $material['kode'] }}"
                        class="mt-6 inline-block font-semibold text-blue-700">Buka materi →</a>
            </article>@empty<x-alert type="info">Belum ada materi.</x-alert>
            @endforelse
        </div>
    </div>
@endsection
