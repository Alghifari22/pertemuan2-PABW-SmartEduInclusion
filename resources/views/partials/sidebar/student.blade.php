<aside class="fixed inset-y-0 left-0 z-40 hidden w-72 flex-col border-r border-slate-200 bg-white px-7 py-7 lg:flex">
    <div class="flex items-center gap-4">
        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700"><i
                data-lucide="user-round" class="h-6 w-6"></i></div>
        <div>
            <p class="text-xl font-bold leading-6">SmartEdu</p>
            <p class="mt-1 text-xs text-slate-600">Belajar Jadi Mudah</p>
        </div>
    </div>
    <nav class="mt-10 space-y-2" aria-label="Navigasi Siswa">
        @foreach (
            [['Beranda', 'layout-dashboard', '/siswa/dashboard'],
             ['Materi', 'book-open', '/siswa/materi'],
             ['Tugas', 'clipboard-list', '/siswa/latihan']] as [$label, $icon, $path])
            <a href="{{ $path }}"
                class="flex w-full items-center gap-3 rounded-xl px-3 py-3.5 text-sm font-medium transition {{ request()->is(ltrim($path, '/')) ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-slate-50' }}"><i
                    data-lucide="{{ $icon }}" class="h-[19px] w-[19px]"></i>{{ $label }}</a>
        @endforeach
    </nav>
    <form method="POST" action="{{ route('logout') }}" class="mt-auto"><button type="submit" class="flex w-full items-center gap-3 px-3 py-3 text-sm text-slate-600 hover:text-red-600"><i data-lucide="log-out" class="h-[19px] w-[19px]"></i>Keluar</button>@csrf</form>
</aside>
