@extends('layouts.app')

@section('title', 'Pengelolaan Anggota | UTS PWEB 2026')

@section('content')
<section class="mb-6 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
    <div>
        <p class="text-sm font-semibold uppercase text-indigo-700">Data organisasi</p>
        <h1 class="mt-2 text-3xl font-bold text-slate-950">Pengelolaan Anggota</h1>
        <p class="mt-2 text-slate-600">Daftar anggota, divisi, jabatan, dan status keaktifan.</p>
    </div>
    <p class="text-sm font-medium text-slate-500">{{ count($anggota) }} anggota</p>
</section>

<div class="overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm">
    <div class="overflow-x-auto">
        <table class="w-full min-w-[720px] text-left text-sm">
            <thead class="border-b border-slate-200 bg-slate-50 text-xs font-semibold uppercase text-slate-600">
                <tr>
                    <th scope="col" class="px-5 py-4">Nama</th>
                    <th scope="col" class="px-5 py-4">NIM</th>
                    <th scope="col" class="px-5 py-4">Divisi</th>
                    <th scope="col" class="px-5 py-4">Jabatan</th>
                    <th scope="col" class="px-5 py-4">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($anggota as $item)
                    <tr class="hover:bg-slate-50">
                        <td class="whitespace-nowrap px-5 py-4 font-semibold text-slate-900">{{ $item['nama'] }}</td>
                        <td class="whitespace-nowrap px-5 py-4 font-mono text-slate-600">{{ $item['nim'] }}</td>
                        <td class="whitespace-nowrap px-5 py-4 text-slate-700">{{ $item['divisi'] }}</td>
                        <td class="whitespace-nowrap px-5 py-4 text-slate-700">{{ $item['jabatan'] }}</td>
                        <td class="whitespace-nowrap px-5 py-4">
                            <span class="rounded-full px-2.5 py-1 text-xs font-semibold {{ $item['status'] === 'Aktif' ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 text-amber-800' }}">{{ $item['status'] }}</span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-5 py-8 text-center text-sm text-slate-500">Belum ada data anggota yang tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
