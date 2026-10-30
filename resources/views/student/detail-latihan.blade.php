@extends('layouts.student', ['title' => 'Detail Latihan - SmartEdu'])
@section('content')
    <div class="mx-auto max-w-3xl pb-12">
        <a href="/siswa/latihan" class="font-medium text-blue-700">← Kembali ke latihan</a>
        <h1 class="mt-8 text-3xl font-bold">Latihan {{ $kodeMateri }}</h1>
        <form class="mt-8 space-y-6 rounded-2xl border border-slate-200 bg-white p-7 shadow-sm">
            @forelse($questions as $question)
                <fieldset>
                    <legend class="font-semibold">{{ $loop->iteration }}. {{ $question }}</legend><label
                        class="mt-4 block"><input type="radio" name="question{{ $loop->index }}"> A. Jawaban
                        pertama</label><label class="mt-3 block"><input type="radio" name="question{{ $loop->index }}"> B.
                        Jawaban kedua</label>
            </fieldset>@empty<x-alert type="info">Belum ada soal.</x-alert>
            @endforelse
            <button type="button" class="rounded-xl bg-blue-600 px-5 py-3 font-semibold text-white">Kirim jawaban</button>
        </form>
    </div>
@endsection
