@extends('layouts.staff', ['title' => 'Dashboard Staff TU - SmartEdu'])
@section('content')
    <div class="mx-auto max-w-6xl pb-12">
        @include('partials.page-header', [
            'eyebrow' => 'Panel administrasi',
            'heading' => 'Selamat datang, Admin!',
            'description' => 'Kelola data akademik dan pengguna SmartEdu.',
        ])<section class="mt-10 grid gap-5 md:grid-cols-3">
            @forelse($summary as $item)
                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm"><strong
                        class="text-3xl">{{ $item['value'] }}</strong>
                    <p class="mt-2 text-slate-600">{{ $item['label'] }}</p>
            </article>@empty<x-alert type="info">Belum ada ringkasan.</x-alert>
            @endforelse
        </section>
    </div>
@endsection
