@extends('layouts.staff', ['title' => 'Manajemen Pengguna - SmartEdu'])

@section('content')
<div class="mx-auto max-w-6xl pb-12">
    @include('partials.page-header', [
        'heading' => 'Manajemen Pengguna',
        'description' => 'Kelola akun Staff TU, guru, siswa, dan orang tua.',
        'action' => '<button id="open-user-modal" type="button" class="rounded-xl bg-blue-600 px-5 py-3 font-semibold text-white transition hover:bg-blue-700">+ Tambah pengguna</button>',
    ])

    @if(isset($success))
        <div class="mt-6"><x-alert type="success">{{ $success }}</x-alert></div>
    @endif

    @if($errors->any())
        <div class="mt-6"><x-alert type="error">{{ $errors->first() }}</x-alert></div>
    @endif

    <section class="mt-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="m-5 flex max-w-sm items-center gap-2 rounded-xl border border-slate-300 px-4 py-3 text-slate-500">
            <i data-lucide="search" class="h-5 w-5"></i>
            <input placeholder="Cari pengguna..." class="w-full outline-none">
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[760px] text-left">
                <thead class="border-y bg-slate-50 text-sm text-slate-600">
                    <tr><th class="px-5 py-4">ID</th><th class="px-5 py-4">Nama</th><th class="px-5 py-4">Email</th><th class="px-5 py-4">Peran</th></tr>
                </thead>
                <tbody class="divide-y">
                    @forelse($users as $user)
                        <tr>
                            <td class="px-5 py-4">{{ $user['id'] }}</td>
                            <td class="px-5 py-4 font-medium">{{ $user['nama'] }}</td>
                            <td class="px-5 py-4">{{ $user['email'] }}</td>
                            <td class="px-5 py-4"><span class="rounded-full bg-blue-100 px-3 py-1 text-sm text-blue-700">{{ $user['peran'] }}</span></td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="px-5 py-12 text-center text-slate-500">Belum ada pengguna.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>

<div id="user-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 p-4">
    <div class="w-full max-w-lg rounded-2xl bg-white shadow-2xl">
        <div class="flex items-center justify-between border-b border-slate-200 px-6 py-5">
            <div><h2 class="text-xl font-bold">Tambah pengguna</h2><p class="mt-1 text-sm text-slate-500">Masukkan data akun baru.</p></div>
            <button id="close-user-modal" type="button" class="rounded-lg p-2 text-slate-500 hover:bg-slate-100"><i data-lucide="x"></i></button>
        </div>
        <form method="POST" action="/staff-tu/pengguna" class="space-y-5 px-6 py-6">
            @csrf
            <div><label for="name" class="mb-2 block text-sm font-medium">Nama lengkap</label><input id="name" name="name" required class="h-12 w-full rounded-lg border border-slate-300 px-4 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"></div>
            <div><label for="email" class="mb-2 block text-sm font-medium">Alamat email</label><input id="email" name="email" type="email" required class="h-12 w-full rounded-lg border border-slate-300 px-4 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"></div>
            <div><label for="role" class="mb-2 block text-sm font-medium">Peran</label><select id="role" name="role" required class="h-12 w-full rounded-lg border border-slate-300 bg-white px-4 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"><option value="">Pilih peran</option><option>Staff TU</option><option>Guru</option><option>Siswa</option><option>Orang Tua</option></select></div>
            <div><label for="password" class="mb-2 block text-sm font-medium">Kata sandi</label><input id="password" name="password" type="password" minlength="8" required class="h-12 w-full rounded-lg border border-slate-300 px-4 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"><p class="mt-1 text-xs text-slate-500">Minimal 8 karakter.</p></div>
            <div class="flex justify-end gap-3 border-t border-slate-200 pt-5"><button id="cancel-user-modal" type="button" class="rounded-lg border border-slate-300 px-5 py-3 font-semibold text-slate-700">Batal</button><button type="submit" class="rounded-lg bg-blue-600 px-5 py-3 font-semibold text-white hover:bg-blue-700">Simpan pengguna</button></div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    const userModal = document.getElementById('user-modal');
    const showUserModal = () => { userModal.classList.remove('hidden'); userModal.classList.add('flex'); };
    const hideUserModal = () => { userModal.classList.add('hidden'); userModal.classList.remove('flex'); };
    document.getElementById('open-user-modal').addEventListener('click', showUserModal);
    document.getElementById('close-user-modal').addEventListener('click', hideUserModal);
    document.getElementById('cancel-user-modal').addEventListener('click', hideUserModal);
    userModal.addEventListener('click', (event) => { if (event.target === userModal) hideUserModal(); });
</script>
@endpush
@endsection
