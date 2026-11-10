@extends('layouts.app')

@section('title', 'Profil | UTS PWEB 2026')

@section('content')
<section class="mb-6">
    <p class="text-sm font-semibold uppercase text-indigo-700">Akun pengguna</p>
    <h1 class="mt-2 text-3xl font-bold text-slate-950">Profil</h1>
</section>

<section class="max-w-3xl overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm">
    <div class="flex flex-col gap-4 bg-slate-900 p-6 text-white sm:flex-row sm:items-center">
        <div class="flex size-14 items-center justify-center rounded-full bg-indigo-600 text-xl font-bold" aria-hidden="true">{{ strtoupper(substr($username, 0, 1)) }}</div>
        <div>
            <p class="text-sm text-slate-300">Username</p>
            <h2 class="text-2xl font-semibold">{{ $username }}</h2>
        </div>
    </div>
    <dl class="divide-y divide-slate-100 px-6">
        <div class="flex flex-col gap-1 py-4 sm:flex-row sm:justify-between">
            <dt class="text-sm text-slate-500">Nama lengkap</dt>
            <dd class="font-medium text-slate-900">{{ $userData['nama'] }}</dd>
        </div>
        <div class="flex flex-col gap-1 py-4 sm:flex-row sm:justify-between">
            <dt class="text-sm text-slate-500">NIM</dt>
            <dd class="font-medium text-slate-900">{{ $userData['nim'] }}</dd>
        </div>
        <div class="flex flex-col gap-1 py-4 sm:flex-row sm:justify-between">
            <dt class="text-sm text-slate-500">Jabatan</dt>
            <dd class="font-medium text-slate-900">{{ $userData['peran'] }}</dd>
        </div>
        <div class="flex flex-col gap-1 py-4 sm:flex-row sm:justify-between">
            <dt class="text-sm text-slate-500">Email</dt>
            <dd class="break-all font-medium text-slate-900">{{ $userData['email'] }}</dd>
        </div>
    </dl>
</section>

<form action="{{ route('logout') }}" method="POST" class="mt-6">
    @csrf
    <button type="submit" class="inline-flex rounded-md bg-rose-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">
        Logout
    </button>
</form>
@endsection
