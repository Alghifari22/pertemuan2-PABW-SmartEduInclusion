@extends('layouts.student', ['title' => 'Latihan Soal - SmartEdu'])
@section('content')
    <div class="mx-auto max-w-6xl pb-12">
        @include('partials.page-header', [
            'heading' => 'Daftar Latihan Soal',
            'description' => 'Uji pemahamanmu melalui latihan soal yang tersedia.',
        ])<div class="mt-8 grid gap-5 md:grid-cols-2">
            @forelse($exercises as $exercise)
                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm"><span
                        class="rounded-full bg-blue-100 px-3 py-1 text-sm text-blue-700">{{ $exercise['kode'] }}</span>
                    <h2 class="mt-6 text-xl font-bold">{{ $exercise['judul'] }}</h2>
                    <p class="mt-2 text-slate-600">{{ $exercise['jumlah'] }}</p><a
                        href="/siswa/latihan/{{ $exercise['kode'] }}"
                        class="mt-6 inline-block font-semibold text-blue-700">Mulai latihan →</a>
            </article>@empty<x-alert type="info">Belum ada latihan.</x-alert>
            @endforelse
        </div>
    </div>
@endsection
