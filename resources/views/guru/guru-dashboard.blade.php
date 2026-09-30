<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru - SmartEdu</title>@vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="min-h-screen bg-[#f7f8ff] text-slate-900">
    <aside class="fixed inset-y-0 left-0 hidden w-72 flex-col border-r border-slate-200 bg-white px-7 py-7 lg:flex">
        <div class="flex items-center gap-4">
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-100 text-blue-700"><i
                    data-lucide="user-round"></i></div>
            <div>
                <p class="text-xl font-bold">SmartEdu</p>
                <p class="mt-1 text-xs text-slate-600">Guru</p>
            </div>
        </div>
        <nav class="mt-10 space-y-2"><a href="/guru/dashboard"
                class="flex items-center gap-3 rounded-xl bg-blue-600 px-3 py-3.5 text-sm font-medium text-white"><i
                    data-lucide="layout-dashboard"></i>Beranda</a><a href="/guru/modul"
                class="flex items-center gap-3 rounded-xl px-3 py-3.5 text-sm text-slate-600 hover:bg-slate-50"><i
                    data-lucide="school"></i>Manajemen Modul</a><a href="/guru/materi"
                class="flex items-center gap-3 rounded-xl px-3 py-3.5 text-sm text-slate-600 hover:bg-slate-50"><i
                    data-lucide="book-open"></i>Manajemen Materi</a><a href="/guru/soal-latihan"
                class="flex items-center gap-3 rounded-xl px-3 py-3.5 text-sm text-slate-600 hover:bg-slate-50"><i
                    data-lucide="clipboard-list"></i>Manajemen Soal Latihan</a><a href="/guru/laporan"
                class="flex items-center gap-3 rounded-xl px-3 py-3.5 text-sm text-slate-600 hover:bg-slate-50"><i
                    data-lucide="file-bar-chart"></i>Laporan</a></nav>
        <div class="mt-auto border-t border-slate-200 pt-6"><a href="/login"
                class="flex items-center gap-3 px-3 py-3 text-sm text-slate-600"><i data-lucide="log-out"></i>Keluar</a>
        </div>
    </aside>
    <main class="px-5 py-8 lg:ml-72 lg:px-10">
        <div class="mx-auto max-w-[1240px] pb-12">
            <h1 class="text-3xl font-bold sm:text-4xl">Dashboard Guru</h1>
            <p class="mt-1 text-slate-600">Selamat datang, Guru!</p>
            <section class="mt-10 grid gap-6 xl:grid-cols-[2fr_1fr]">
                <article class="rounded-2xl border border-slate-300 bg-white p-6 shadow-sm">
                    <h2 class="flex items-center gap-2 font-semibold"><i data-lucide="bar-chart-3"
                            class="text-blue-600"></i>Progres Rata-rata Kelas <span
                            class="ml-auto rounded-full bg-blue-100 px-4 py-1.5 text-sm text-blue-700">MAT-01</span>
                    </h2>
                    <p class="mt-5 text-slate-600">Berdasarkan penyelesaian materi “Pengenalan Matematika Dasar”.</p>
                    <div class="mt-7 flex items-end gap-6"><strong class="text-5xl text-blue-700">75%</strong>
                        <div class="flex-1">
                            <p class="mb-3 text-right font-semibold">15/20 siswa selesai</p>
                            <div class="h-3 rounded-full bg-blue-100">
                                <div class="h-full w-3/4 rounded-full bg-emerald-700"></div>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="grid gap-5">
                    <article class="flex items-center gap-5 rounded-2xl border bg-white p-6 shadow-sm"><i
                            data-lucide="alert-triangle" class="text-red-600"></i>
                        <div><strong class="text-xl">5</strong>
                            <p class="text-slate-600">Siswa Tertinggal</p>
                        </div>
                    </article>
                    <article class="flex items-center gap-5 rounded-2xl border bg-white p-6 shadow-sm"><i
                            data-lucide="check-square" class="text-emerald-700"></i>
                        <div><strong class="text-xl">12</strong>
                            <p class="text-slate-600">Latihan Dinilai</p>
                        </div>
                    </article>
                </div>
            </section>
            <section class="mt-10 overflow-hidden rounded-2xl border bg-white shadow-sm">
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
                        @foreach ([['Siti Aisyah', 'Selesai', '92'], ['Budi Santoso', '65%', '78'], ['Andi Pratama', '35%', 'N/A'], ['Rina Permata', 'Selesai', '88']] as $index => $student)
                            <tr>
                                <td class="px-6 py-5">{{ $index + 1 }}</td>
                                <td class="px-6 py-5 font-medium">{{ $student[0] }}</td>
                                <td class="px-6 py-5">{{ $student[1] }}</td>
                                <td class="px-6 py-5"><span
                                        class="rounded-full bg-emerald-100 px-3 py-1 text-sm text-emerald-700">{{ $student[2] }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </main>
    <script>
        lucide.createIcons()
    </script>
</body>

</html>
