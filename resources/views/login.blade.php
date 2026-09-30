<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - SmartEdu</title>

    {{-- Tailwind CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="min-h-screen bg-[#eef3ff] flex items-center justify-center px-8">

    <div class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        {{-- Left Illustration --}}
        <div class="hidden lg:flex flex-col items-center text-center">

            <div class="w-[450px] h-[450px] rounded-3xl bg-gradient-to-br from-[#bdebf4] to-[#8ccdda] flex items-center justify-center shadow-sm overflow-hidden">
                <img
                    src="{{ asset('images/icon_login.png') }}"
                    alt="Ilustrasi belajar"
                    class="w-full h-full object-contain"
                >
            </div>

            <h1 class="mt-12 text-4xl font-bold text-slate-900 leading-tight">
                Lingkungan Belajar yang <br>
                Tenang
            </h1>

            <p class="mt-6 max-w-md text-lg text-slate-600 leading-relaxed">
                Kami merancang platform ini dengan prinsip minimalisme inklusif,
                memastikan setiap siswa dapat fokus pada materi tanpa gangguan
                visual.
            </p>

        </div>


        {{-- Login Form --}}
        <div class="flex justify-center">

            <div class="w-full max-w-[440px] bg-white border border-slate-200 rounded-3xl px-8 py-9 shadow-sm">

                {{-- Logo / Header --}}
                <div class="flex flex-col items-center">

                    <div class="w-16 h-16 rounded-2xl bg-blue-500 flex items-center justify-center text-white">
                        <i data-lucide="graduation-cap" class="w-[34px] h-[34px]"></i>
                    </div>

                    <h2 class="mt-6 text-4xl font-bold text-blue-500">
                        SmartEdu
                    </h2>

                    <p class="mt-2 text-slate-600">
                        Sistem Edukasi Inklusif
                    </p>

                </div>


                {{-- Login Form --}}
                <form
                    {{-- action="{{ route('login') }}" --}}
                    method="POST"
                    class="mt-12 space-y-6"
                >

                    @csrf


                    {{-- Email --}}
                    <div>

                        <label
                            for="email"
                            class="flex items-center gap-2 text-sm font-medium text-slate-800 mb-2"
                        >
                            <i
                                data-lucide="mail"
                                class="w-[17px] h-[17px] text-slate-500"
                            ></i>

                            Alamat Email
                        </label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Masukkan email Anda"
                            autocomplete="email"
                            required
                            autofocus
                            class="w-full h-14 px-4 rounded-xl border border-slate-300 text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"
                        >

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Password --}}
                    <div>

                        <label
                            for="password"
                            class="flex items-center gap-2 text-sm font-medium text-slate-800 mb-2"
                        >
                            <i
                                data-lucide="lock"
                                class="w-[17px] h-[17px] text-slate-500"
                            ></i>

                            Kata Sandi
                        </label>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Masukkan kata sandi Anda"
                            autocomplete="current-password"
                            required
                            class="w-full h-14 px-4 rounded-xl border border-slate-300 text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"
                        >

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Authentication Error --}}
                    @if (session('error'))
                        <p
                            role="alert"
                            class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700"
                        >
                            {{ session('error') }}
                        </p>
                    @endif


                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div
                            role="alert"
                            class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700"
                        >
                            {{ $errors->first() }}
                        </div>
                    @endif


                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="w-full h-14 rounded-xl bg-blue-500 hover:bg-blue-600 text-white font-semibold flex items-center justify-center gap-2 transition"
                    >
                        Masuk

                        <i
                            data-lucide="arrow-right"
                            class="w-5 h-5"
                        ></i>
                    </button>

                </form>

            </div>

        </div>

    </div>


    {{-- Initialize Lucide --}}
    <script>
        lucide.createIcons();
    </script>

</body>
</html>
