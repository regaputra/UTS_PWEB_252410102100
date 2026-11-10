@extends('layouts.app')

@section('title', 'Login | UTS PWEB 2026')

@section('content')
<section class="mx-auto grid min-h-[65vh] max-w-4xl items-center gap-8 md:grid-cols-[1fr_0.85fr]">
    <div class="space-y-5">
        <p class="text-sm font-semibold uppercase text-indigo-700">Pemrograman Web 2026</p>
        <h1 class="text-4xl font-bold leading-tight text-slate-950 sm:text-5xl">Ruang kerja organisasi, satu dashboard.</h1>
        <p class="max-w-xl text-base leading-7 text-slate-600">Masuk dengan username untuk melihat ringkasan, profil, dan data anggota organisasi.</p>
    </div>

    <div class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
        <h2 class="text-xl font-semibold text-slate-900">Masuk ke sistem</h2>
        <p class="mt-1 text-sm text-slate-500">Gunakan username yang ingin ditampilkan.</p>

        @if ($errors->has('username'))
            @include('components.notice', ['notice' => $errors->first('username')])
        @endif

        <form action="{{ route('login.process') }}" method="POST" class="mt-6 space-y-5">
            @csrf
            <div>
                <label for="username" class="mb-2 block text-sm font-medium text-slate-700">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    value="{{ old('username', $username) }}"
                    required
                    maxlength="50"
                    autocomplete="username"
                    placeholder="Contoh: Rega"
                    class="w-full rounded-md border border-slate-300 px-4 py-3 text-base outline-none transition focus:border-indigo-600 focus:ring-2 focus:ring-indigo-100"
                >
            </div>
            <button type="submit" class="w-full rounded-md bg-indigo-700 px-4 py-3 font-semibold text-white transition hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Lanjut ke dashboard
            </button>
        </form>
    </div>
</section>
@endsection
