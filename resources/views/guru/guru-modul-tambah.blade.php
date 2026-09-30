<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Modul - SmartEdu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="min-h-screen bg-[#f7f8ff] text-slate-900">
    <main class="mx-auto max-w-5xl px-5 py-8 sm:px-8 lg:py-12">
        <a href="/guru/modul"
            class="inline-flex items-center gap-2 text-sm font-medium text-slate-600 transition hover:text-blue-700">
            <i data-lucide="arrow-left" class="h-4 w-4"></i>
            Kembali ke manajemen modul
        </a>

        <div class="mt-8 max-w-3xl">
            <p class="text-sm font-semibold text-blue-700">MANAJEMEN MODUL</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">Tambah modul baru</h1>
            <p class="mt-3 max-w-2xl text-slate-600">
                Lengkapi informasi dasar modul agar dapat digunakan dalam kegiatan belajar.
            </p>
        </div>

        <form method="POST" action="/guru/modul"
            class="mt-8 max-w-3xl overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            @csrf
            <div class="border-b border-slate-200 px-6 py-5 sm:px-8">
                <h2 class="font-semibold text-slate-900">Informasi modul</h2>
                <p class="mt-1 text-sm text-slate-500">Semua kolom wajib diisi.</p>
            </div>

            <div class="grid gap-5 px-6 py-7 sm:grid-cols-2 sm:px-8">
                <div class="sm:col-span-2">
                    <label for="judul" class="mb-2 block text-sm font-medium text-slate-800">Judul modul</label>
                    <input id="judul" name="judul" required placeholder="Contoh: Bilangan Dasar"
                        class="h-12 w-full rounded-lg border border-slate-300 px-4 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                </div>

                <div>
                    <label for="kode_modul" class="mb-2 block text-sm font-medium text-slate-800">Kode modul</label>
                    <input id="kode_modul" name="kode_modul" required placeholder="Contoh: MOD-003"
                        class="h-12 w-full rounded-lg border border-slate-300 px-4 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                </div>

                <div>
                    <label for="kelas" class="mb-2 block text-sm font-medium text-slate-800">Kelas</label>
                    <input id="kelas" name="kelas" required placeholder="Contoh: Kelas 4"
                        class="h-12 w-full rounded-lg border border-slate-300 px-4 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                </div>

                <div class="sm:col-span-2">
                    <label for="mata_pelajaran" class="mb-2 block text-sm font-medium text-slate-800">Mata pelajaran</label>
                    <input id="mata_pelajaran" name="mata_pelajaran" required placeholder="Contoh: Matematika"
                        class="h-12 w-full rounded-lg border border-slate-300 px-4 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                </div>
            </div>

            <div class="flex flex-col-reverse gap-3 border-t border-slate-200 bg-slate-50 px-6 py-5 sm:flex-row sm:justify-end sm:px-8">
                <a href="/guru/modul"
                    class="inline-flex h-11 items-center justify-center rounded-lg border border-slate-300 bg-white px-5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">
                    Batal
                </a>
                <button type="submit"
                    class="inline-flex h-11 items-center justify-center rounded-lg bg-blue-600 px-5 text-sm font-semibold text-white transition hover:bg-blue-700">
                    Simpan modul
                </button>
            </div>
        </form>
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
            return '<a href="' + path + '" class="flex w-full items-center gap-3 rounded-xl px-3 py-3.5 text-sm font-medium transition ' +
                (location.pathname === path ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-slate-50') +
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
