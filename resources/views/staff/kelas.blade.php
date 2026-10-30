@extends('layouts.staff', ['title' => 'Manajemen Kelas - SmartEdu'])
@section('content')
    <div class="mx-auto max-w-6xl pb-12">
        @include('partials.page-header', [
            'heading' => 'Manajemen Kelas',
            'description' => 'Kelola daftar kelas yang tersedia.',
            'action' =>
                '<button class="rounded-xl bg-blue-600 px-5 py-3 font-semibold text-white">+ Tambah kelas</button>',
        ])<section
            class="mt-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <table class="w-full text-left">
                <thead class="border-y bg-slate-50">
                    <tr>
                        <th class="px-5 py-4">Kode Kelas</th>
                        <th class="px-5 py-4">Nama Kelas</th>
                        <th class="px-5 py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @forelse($classes as $class)
                        <tr>
                            <td class="px-5 py-4">{{ $class['kode'] }}</td>
                            <td class="px-5 py-4">{{ $class['nama'] }}</td>
                            <td class="px-5 py-4">@include('partials.table-actions')</td>
                    </tr>@empty<tr>
                            <td colspan="3" class="px-5 py-10 text-center text-slate-500">Belum ada kelas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </div>
@endsection
