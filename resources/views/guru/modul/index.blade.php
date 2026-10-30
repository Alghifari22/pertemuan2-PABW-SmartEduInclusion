@extends('layouts.guru', ['title' => 'Manajemen Modul - SmartEdu'])

@section('content')
<div class="mx-auto max-w-6xl pb-12">
    @include('partials.page-header', [
        'eyebrow' => 'Manajemen modul',
        'heading' => 'Kelola modul pembelajaran',
        'description' => 'Kelola modul pada mata pelajaran yang Anda ajar.',
        'action' => '<a href="/guru/modul/tambah" class="rounded-xl bg-blue-600 px-5 py-3 font-semibold text-white transition hover:bg-blue-700">+ Tambah modul</a>',
    ])

    @if(isset($success))
        <div class="mt-6"><x-alert type="success">{{ $success }}</x-alert></div>
    @endif

    <section class="mt-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="m-5 flex max-w-sm items-center gap-2 rounded-xl border border-slate-300 px-4 py-3 text-slate-500">
            <i data-lucide="search" class="h-5 w-5"></i>
            <input placeholder="Cari data..." class="w-full outline-none">
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[760px] text-left text-sm">
                <thead class="border-y bg-slate-50 text-slate-600">
                    <tr><th class="px-5 py-4">Kode</th><th class="px-5 py-4">Judul Modul</th><th class="px-5 py-4">Mata Pelajaran</th><th class="px-5 py-4">Kelas</th><th class="px-5 py-4">Aksi</th></tr>
                </thead>
                <tbody class="divide-y">
                    @forelse($modules as $module)
                        @include('partials.module-row', ['module' => $module, 'highlight' => $loop->last && isset($success)])
                    @empty
                        <tr><td colspan="5" class="px-5 py-12 text-center text-slate-500">Belum ada modul.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
