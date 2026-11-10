<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function login(): View
    {
        return view('login', [
            'username' => '',
        ]);
    }

    public function processLogin(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:50', 'not_regex:/^\s*$/u'],
        ]);

        $request->session()->regenerate();
        $request->session()->put('authenticated_username', trim($validated['username']));

        return redirect()->intended(route('dashboard'));
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'Anda berhasil logout.');
    }

    public function dashboard(Request $request): View
    {
        $username = $request->session()->get('authenticated_username');
        $ringkasan = [
            ['label' => 'Anggota', 'value' => 8, 'detail' => 'Anggota organisasi'],
            ['label' => 'Divisi', 'value' => 4, 'detail' => 'Divisi kepanitiaan'],
            ['label' => 'Status aktif', 'value' => 7, 'detail' => 'Anggota aktif'],
        ];

        return view('dashboard', compact('username', 'ringkasan'));
    }

    public function profile(Request $request): View
    {
        $username = $request->session()->get('authenticated_username');

        $userData = [
            'nama' => 'Mahasiswa PWEB',
            'nim' => '252410102100',
            'peran' => 'Pengurus Organisasi',
            'email' => '252410102100@unej.ac.id',
        ];

        return view('profile', compact('username', 'userData'));
    }

    public function pengelolaan(Request $request): View
    {
        $username = $request->session()->get('authenticated_username');
        $anggota = [
            [
                'nama' => 'Rega Putra',
                'nim' => '252410102100',
                'divisi' => 'Acara',
                'jabatan' => 'Ketua Divisi',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '252410102101',
                'divisi' => 'Acara',
                'jabatan' => 'Anggota',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Siti Rahmawati',
                'nim' => '252410102102',
                'divisi' => 'Humas',
                'jabatan' => 'Koordinator',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Andi Pratama',
                'nim' => '252410102103',
                'divisi' => 'Humas',
                'jabatan' => 'Anggota',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Dinda Putri',
                'nim' => '252410102104',
                'divisi' => 'Perlengkapan',
                'jabatan' => 'Koordinator',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Fajar Nugraha',
                'nim' => '252410102105',
                'divisi' => 'Perlengkapan',
                'jabatan' => 'Anggota',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Nabila Zahra',
                'nim' => '252410102106',
                'divisi' => 'Konsumsi',
                'jabatan' => 'Koordinator',
                'status' => 'Aktif',
            ],
            [
                'nama' => 'Rizky Maulana',
                'nim' => '252410102107',
                'divisi' => 'Konsumsi',
                'jabatan' => 'Anggota',
                'status' => 'Cuti',
            ],
        ];

        return view('pengelolaan', compact('username', 'anggota'));
    }

    public function welcome(Request $request): View
    {
        return view('welcome', [
            'username' => $request->session()->get('authenticated_username'),
        ]);
    }
}
