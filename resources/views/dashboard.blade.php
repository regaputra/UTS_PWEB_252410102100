@extends('layouts.app')

@section('title', 'Dashboard | RUANG ORGANISASI UKM/ORMAWA')

@section('content')
<section class="mb-8 border-b border-slate-200 pb-7">
    <p class="text-sm font-semibold uppercase text-indigo-700">Dashboard organisasi</p>
    <h1 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">Selamat datang, {{ $username }}</h1>
    <p class="mt-3 max-w-2xl text-slate-600">Pantau susunan tim dan informasi organisasi dari satu tempat.</p>
</section>

<section aria-label="Ringkasan organisasi" class="grid gap-4 sm:grid-cols-3">
    @foreach ($ringkasan as $item)
        <article class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-medium text-slate-500">{{ $item['label'] }}</p>
            <p class="mt-3 text-3xl font-bold text-slate-900">{{ $item['value'] }}</p>
            <p class="mt-1 text-sm text-slate-600">{{ $item['detail'] }}</p>
        </article>
    @endforeach
</section>

<section class="mt-8 rounded-lg border border-indigo-100 bg-indigo-50 p-5 sm:p-6">
    <h2 class="font-semibold text-indigo-950">Mulai dari data anggota</h2>
    <p class="mt-1 text-sm leading-6 text-indigo-900">Buka halaman pengelolaan untuk melihat pembagian divisi, jabatan, dan status setiap anggota.</p>
    <a href="{{ route('pengelolaan') }}" class="mt-4 inline-flex rounded-md bg-indigo-700 px-4 py-2.5 text-sm font-semibold text-white hover:bg-indigo-800">Lihat pengelolaan</a>
</section>
@endsection
