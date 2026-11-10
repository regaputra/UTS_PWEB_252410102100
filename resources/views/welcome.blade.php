@extends('layouts.app')

@section('title', 'Beranda | UTS PWEB 2026')

@section('content')
<section class="mx-auto max-w-3xl py-10 sm:py-16">
    <p class="text-sm font-semibold uppercase text-indigo-700">Organisasi Mahasiswa</p>
    <h1 class="mt-3 text-4xl font-bold leading-tight text-slate-950 sm:text-5xl">UTS Pemrograman Web 2026</h1>
    <p class="mt-5 max-w-2xl text-lg leading-8 text-slate-600">Kelola informasi organisasi, kenali anggota, dan pantau pembagian divisi melalui satu aplikasi.</p>
    <a href="{{ route('login', ['username' => $username]) }}" class="mt-8 inline-flex rounded-md bg-indigo-700 px-5 py-3 font-semibold text-white hover:bg-indigo-800">Masuk ke sistem</a>
</section>
@endsection
