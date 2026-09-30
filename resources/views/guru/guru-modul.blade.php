<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Modul - SmartEdu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="min-h-screen bg-[#f7f8ff] text-slate-900">
    <main class="mx-auto max-w-6xl px-5 py-10">
        <a href="/guru/dashboard" class="text-blue-700">← Kembali ke dashboard guru</a>

        <div class="mt-6 flex flex-wrap items-end justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold">Manajemen Modul</h1>
                <p class="mt-2 text-slate-600">Kelola modul pada mata pelajaran yang Anda ajar.</p>
            </div>
            <a href="/guru/modul/tambah"
                class="rounded-xl bg-blue-600 px-5 py-3 font-semibold text-white hover:bg-blue-700">
                + Tambah
            </a>
        </div>

        @if (isset($kode_modul))
            <div class="mt-6 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">
                Modul berhasil ditambahkan.
            </div>
        @endif

        <section class="mt-8 overflow-hidden rounded-2xl border bg-white shadow-sm">
            <div class="m-5 flex max-w-sm items-center gap-2 rounded-xl border px-4 py-3 text-slate-500">
                <i data-lucide="search"></i>
                <input placeholder="Cari data..." class="w-full outline-none">
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[760px] text-left text-sm">
                    <thead class="border-y bg-slate-50">
                        <tr>
                            <th class="px-5 py-4">Kode</th>
                            <th class="px-5 py-4">Judul Modul</th>
                            <th class="px-5 py-4">Mata Pelajaran</th>
                            <th class="px-5 py-4">Kelas</th>
                            <th class="px-5 py-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @if (isset($kode_modul))
                            <tr class="bg-blue-50/40">
                                <td class="px-5 py-4">{{ $kode_modul }}</td>
                                <td class="px-5 py-4 font-medium">{{ $judul }}</td>
                                <td class="px-5 py-4">{{ $mata_pelajaran }}</td>
                                <td class="px-5 py-4">{{ $kelas }}</td>
                                <td class="px-5 py-4 text-blue-600">Edit <span class="ml-3 text-red-600">Hapus</span></td>
                            </tr>
                        @endif
                        <tr>
                            <td class="px-5 py-4">MOD-001</td>
                            <td class="px-5 py-4 font-medium">Bilangan Dasar</td>
                            <td class="px-5 py-4">Matematika</td>
                            <td class="px-5 py-4">Kelas 4</td>
                            <td class="px-5 py-4 text-blue-600">Edit <span class="ml-3 text-red-600">Hapus</span></td>
                        </tr>
                        <tr>
                            <td class="px-5 py-4">MOD-002</td>
                            <td class="px-5 py-4 font-medium">Makhluk Hidup</td>
                            <td class="px-5 py-4">IPA</td>
                            <td class="px-5 py-4">Kelas 5</td>
                            <td class="px-5 py-4 text-blue-600">Edit <span class="ml-3 text-red-600">Hapus</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script>
        const links = [
            ['Beranda', '/guru/dashboard', 'layout-dashboard'],
            ['Manajemen Modul', '/guru/modul', 'school'],
            ['Manajemen Materi', '/guru/materi', 'book-open'],
            ['Manajemen Soal Latihan', '/guru/soal-latihan', 'clipboard-list'],
            ['Laporan', '/guru/laporan', 'file-bar-chart'],
        ];
        const navigation = links.map(([label, path, icon]) => {
            const active = location.pathname === path;
            return '<a href="' + path + '" class="flex w-full items-center gap-3 rounded-xl px-3 py-3.5 text-sm font-medium transition ' +
                (active ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-slate-50') +
                '"><i data-lucide="' + icon + '" class="h-[19px] w-[19px]"></i>' + label + '</a>';
        }).join('');

        document.body.insertAdjacentHTML('afterbegin',
            '<aside class="fixed inset-y-0 left-0 z-40 hidden w-72 flex-col border-r border-slate-200 bg-white px-7 py-7 lg:flex">' +
            '<div class="flex items-start justify-between gap-3"><div class="flex items-center gap-4">' +
            '<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700"><i data-lucide="user-round" class="h-6 w-6"></i></div>' +
            '<div><p class="text-xl font-bold leading-6">SmartEdu</p><p class="mt-1 text-xs text-slate-600">Guru</p></div></div></div>' +
            '<nav class="mt-10 space-y-2">' + navigation + '</nav>' +
            '<a href="/login" class="mt-auto flex items-center gap-3 px-3 py-3 text-sm text-slate-600 hover:text-red-600"><i data-lucide="log-out" class="h-[19px] w-[19px]"></i>Keluar</a></aside>');
        document.querySelector('main').classList.add('lg:ml-72');

        const iconScript = document.createElement('script');
        iconScript.src = 'https://unpkg.com/lucide@latest';
        iconScript.onload = () => lucide.createIcons();
        document.head.appendChild(iconScript);
    </script>
</body>

</html>
