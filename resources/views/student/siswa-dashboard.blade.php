<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Dashboard Siswa - SmartEdu</title>@vite(['resources/css/app.css','resources/js/app.js'])</head><body class="min-h-screen bg-[#f7f8ff] text-slate-900"><main class="mx-auto max-w-5xl px-5 py-10"><h1 class="text-3xl font-bold sm:text-4xl">Halo, Siswa!</h1><p class="mt-2 text-slate-600">Selamat datang kembali. Yuk lanjutkan belajar hari ini.</p><section class="mt-10 rounded-2xl bg-blue-600 p-7 text-white"><p class="text-blue-100">Progres belajar minggu ini</p><strong class="mt-2 block text-5xl">68%</strong><div class="mt-5 h-3 rounded-full bg-blue-400"><div class="h-full w-2/3 rounded-full bg-white"></div></div></section><h2 class="mt-10 text-2xl font-bold">Materi terbaru</h2><div class="mt-5 grid gap-5 md:grid-cols-2"><a href="/siswa/materi/MAT-01" class="rounded-2xl border bg-white p-6 shadow-sm"><p class="text-sm font-semibold text-blue-600">MAT-01</p><h3 class="mt-2 text-xl font-bold">Pengenalan Matematika Dasar</h3><p class="mt-3 text-slate-600">75% selesai</p></a><a href="/siswa/materi/IPA-02" class="rounded-2xl border bg-white p-6 shadow-sm"><p class="text-sm font-semibold text-blue-600">IPA-02</p><h3 class="mt-2 text-xl font-bold">Makhluk Hidup di Sekitar Kita</h3><p class="mt-3 text-slate-600">40% selesai</p></a></div></main></body></html>
<script>
const role = location.pathname.startsWith('/guru') ? 'Guru' : location.pathname.startsWith('/staff-tu') ? 'Staff TU' : location.pathname.startsWith('/orang-tua') ? 'Orang Tua' : 'Siswa';
const links = role === 'Guru' ? [['Beranda','/guru/dashboard'],['Manajemen Modul','/guru/modul'],['Manajemen Materi','/guru/materi'],['Manajemen Soal Latihan','/guru/soal-latihan'],['Laporan','/guru/laporan']] : role === 'Staff TU' ? [['Beranda','/staff-tu/dashboard'],['Manajemen Pengguna','/staff-tu/pengguna'],['Manajemen Kelas','/staff-tu/kelas'],['Manajemen Mata Pelajaran','/staff-tu/mapel']] : role === 'Orang Tua' ? [['Beranda','/orang-tua/dashboard'],['Perkembangan Anak','/orang-tua/dashboard']] : [['Beranda','/siswa/dashboard'],['Materi','/siswa/materi'],['Tugas','/siswa/latihan']];
const navigation = links.map(([label, path]) => '<a href="' + path + '" class="block rounded-xl px-3 py-3.5 text-sm font-medium ' + (location.pathname === path ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-slate-50') + '">' + label + '</a>').join('');
document.body.insertAdjacentHTML('afterbegin', '<aside class="fixed inset-y-0 left-0 z-20 hidden w-72 flex-col border-r border-slate-200 bg-white px-7 py-7 lg:flex"><div class="flex items-center gap-4"><div class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-100 text-blue-700">🎓</div><div><p class="text-xl font-bold">' + (role === 'Staff TU' ? 'Admin Dashboard' : 'SmartEdu') + '</p><p class="mt-1 text-xs text-slate-600">' + role + '</p></div></div><nav class="mt-10 space-y-2">' + navigation + '</nav><a href="/login" class="mt-auto text-sm text-slate-600">Keluar</a></aside>');
document.querySelector('main').classList.add('lg:ml-72');
</script>
<script>
const sidebarIcons = {'/guru/dashboard':'layout-dashboard','/guru/modul':'school','/guru/materi':'book-open','/guru/soal-latihan':'clipboard-list','/guru/laporan':'file-bar-chart','/staff-tu/dashboard':'layout-dashboard','/staff-tu/pengguna':'users-round','/staff-tu/kelas':'graduation-cap','/staff-tu/mapel':'book-open','/siswa/dashboard':'layout-dashboard','/siswa/materi':'book-open','/siswa/latihan':'clipboard-list','/orang-tua/dashboard':'layout-dashboard'};
document.querySelectorAll('aside nav a').forEach((link) => {
    const icon = sidebarIcons[link.getAttribute('href')];
    if (icon) link.insertAdjacentHTML('afterbegin', '<i data-lucide="' + icon + '" class="mr-3 inline-block h-5 w-5 align-middle"></i>');
});
const iconScript = document.createElement('script');
iconScript.src = 'https://unpkg.com/lucide@latest';
iconScript.onload = () => lucide.createIcons();
document.head.appendChild(iconScript);
</script>
<script>
const currentSidebar = document.querySelector('aside');
if (currentSidebar) {
    currentSidebar.className = 'fixed inset-y-0 left-0 z-40 flex w-72 flex-col border-r border-slate-200 bg-white px-7 py-7';
    const sidebarHeader = currentSidebar.querySelector('div.flex.items-center.gap-4');
    const sidebarLogo = sidebarHeader ? sidebarHeader.querySelector('div') : null;
    if (sidebarLogo) {
        sidebarLogo.className = 'flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700';
        sidebarLogo.innerHTML = role === 'Staff TU' ? '<span class="h-7 w-7 rounded-bl-2xl rounded-tr-2xl bg-gradient-to-br from-cyan-400 to-blue-700"></span>' : '<i data-lucide="user-round" class="h-6 w-6"></i>';
    }
    currentSidebar.querySelectorAll('nav a').forEach((link) => {
        const active = link.classList.contains('bg-blue-600');
        link.className = 'flex w-full items-center gap-3 rounded-xl px-3 py-3.5 text-sm font-medium transition ' + (active ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-slate-50');
        const icon = link.querySelector('[data-lucide]');
        if (icon) icon.className = 'h-[19px] w-[19px]';
    });
    const logout = currentSidebar.querySelector('a[href="/login"]');
    if (logout) logout.className = 'mt-auto flex items-center gap-3 px-3 py-3 text-sm text-slate-600 hover:text-red-600';
    if (window.lucide) lucide.createIcons();
}
</script>
