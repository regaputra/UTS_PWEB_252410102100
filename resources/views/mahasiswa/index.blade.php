@extends('layouts.app')

@section('title', 'Mahasiswa | UTS PWEB 2026')

@section('content')
<section class="mb-6">
    <p class="text-sm font-semibold uppercase text-indigo-700">Akademik</p>
    <h1 class="mt-2 text-3xl font-bold text-slate-950">Data Mahasiswa</h1>
</section>

<div class="overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm">
    <div class="overflow-x-auto">
        <table class="w-full min-w-[540px] text-left text-sm">
            <thead class="border-b border-slate-200 bg-slate-50 text-xs font-semibold uppercase text-slate-600">
                <tr>
                    <th scope="col" class="px-5 py-4">NIM</th>
                    <th scope="col" class="px-5 py-4">Nama</th>
                    <th scope="col" class="px-5 py-4">Jurusan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td class="whitespace-nowrap px-5 py-4 font-mono text-slate-600">{{ $mhs['nim'] }}</td>
                        <td class="whitespace-nowrap px-5 py-4 font-medium text-slate-900">{{ $mhs['nama'] }}</td>
                        <td class="whitespace-nowrap px-5 py-4 text-slate-700">{{ $mhs['jurusan'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
