@extends('layouts.student', ['title' => 'Detail Materi - SmartEdu'])
@section('content')
    <div class="mx-auto max-w-4xl pb-12"><a href="/siswa/materi"
            class="inline-flex items-center gap-2 font-medium text-blue-700"><i data-lucide="arrow-left"
                class="h-4 w-4"></i>Kembali ke materi</a>
        <p class="mt-8 text-sm font-semibold text-blue-600">{{ $kodeMateri }}</p>
        <h1 class="mt-2 text-3xl font-bold">{{ $judul }}</h1>
        <article class="mt-8 rounded-2xl border border-slate-200 bg-white p-7 shadow-sm">
            <h2 class="text-2xl font-bold">Pengantar</h2>
            <p class="mt-4 leading-8 text-slate-600">Pelajari materi dengan teliti sebelum melanjutkan ke latihan soal.</p>
        </article>
    </div>
@endsection
