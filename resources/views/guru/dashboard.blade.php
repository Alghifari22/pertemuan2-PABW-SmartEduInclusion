@extends('layouts.guru', ['title' => 'Dashboard Guru - SmartEdu'])
@section('content')
    <div class="mx-auto max-w-6xl pb-12">
        @include('partials.page-header', [
            'heading' => 'Dashboard Guru',
            'description' => 'Selamat datang, Guru!',
        ])
        <section class="mt-10 grid gap-6 xl:grid-cols-[2fr_1fr]">
            <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <h2 class="flex items-center gap-2 font-semibold"><i data-lucide="bar-chart-3"
                        class="h-5 w-5 text-blue-600"></i>Progres Rata-rata Kelas <span
                        class="ml-auto rounded-full bg-blue-100 px-4 py-1.5 text-sm text-blue-700">MAT-01</span></h2>
                <p class="mt-5 text-slate-600">Berdasarkan penyelesaian materi “Pengenalan Matematika Dasar”.</p>
                <div class="mt-7 flex items-end gap-6"><strong class="text-5xl text-blue-700">{{ $progress }}%</strong>
                    <div class="flex-1">
                        <p class="mb-3 text-right font-semibold">{{ $studentsFinished }}/{{ $studentsTotal }} siswa selesai
                        </p>
                        <div class="h-3 rounded-full bg-blue-100">
                            <div class="h-full rounded-full bg-emerald-700" style="width:{{ $progress }}%"></div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="grid gap-5">
                <article class="flex items-center gap-5 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm"><i
                        data-lucide="alert-triangle" class="text-red-600"></i>
                    <div><strong class="text-xl">{{ $studentsBehind }}</strong>
                        <p class="text-slate-600">Siswa Tertinggal</p>
                    </div>
                </article>
                <article class="flex items-center gap-5 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm"><i
                        data-lucide="check-square" class="text-emerald-700"></i>
                    <div><strong class="text-xl">{{ $gradedExercises }}</strong>
                        <p class="text-slate-600">Latihan Dinilai</p>
                    </div>
                </article>
            </div>
        </section>
        <section class="mt-10 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <h2 class="px-6 py-6 text-lg font-semibold">Daftar Siswa & Status Penyelesaian</h2>
            <table class="w-full text-left">
                <thead class="border-y bg-slate-50 text-sm text-slate-600">
                    <tr>
                        <th class="px-6 py-4">No</th>
                        <th class="px-6 py-4">Nama Siswa</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Skor</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @forelse($students as $student)
                        <tr>
                            <td class="px-6 py-5">{{ $loop->iteration }}</td>
                            <td class="px-6 py-5 font-medium">{{ $student['nama'] }}</td>
                            <td class="px-6 py-5">{{ $student['status'] }}</td>
                            <td class="px-6 py-5">{{ $student['skor'] }}</td>
                    </tr>@empty<tr>
                            <td colspan="4" class="px-6 py-10 text-center text-slate-500">Belum ada data siswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </div>
@endsection
