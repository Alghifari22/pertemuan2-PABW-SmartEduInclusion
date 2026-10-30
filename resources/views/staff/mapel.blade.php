@extends('layouts.staff', ['title' => 'Manajemen Mata Pelajaran - SmartEdu'])
@section('content')
    <div class="mx-auto max-w-6xl pb-12">
        @include('partials.page-header', [
            'heading' => 'Manajemen Mata Pelajaran',
            'description' => 'Kelola mata pelajaran sekolah.',
            'action' =>
                '<button class="rounded-xl bg-blue-600 px-5 py-3 font-semibold text-white">+ Tambah mapel</button>',
        ])<section
            class="mt-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <table class="w-full text-left">
                <thead class="border-y bg-slate-50">
                    <tr>
                        <th class="px-5 py-4">Kode Mapel</th>
                        <th class="px-5 py-4">Nama Mata Pelajaran</th>
                        <th class="px-5 py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @forelse($subjects as $subject)
                        <tr>
                            <td class="px-5 py-4">{{ $subject['kode'] }}</td>
                            <td class="px-5 py-4">{{ $subject['nama'] }}</td>
                            <td class="px-5 py-4">@include('partials.table-actions')</td>
                    </tr>@empty<tr>
                            <td colspan="3" class="px-5 py-10 text-center text-slate-500">Belum ada mata pelajaran.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </div>
@endsection
