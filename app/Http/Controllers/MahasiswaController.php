<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MahasiswaController extends Controller
{
    public function index(Request $request): View
    {
        $mahasiswa = [
            [
                'nim' => '252410102100',
                'nama' => 'Rega',
                'jurusan' => 'Teknologi Informasi',
            ],
            [
                'nim' => '252410102101',
                'nama' => 'Budi',
                'jurusan' => 'Teknologi Informasi',
            ],
        ];

        $username = $request->query('username', 'Guest');

        return view('mahasiswa.index', compact('mahasiswa', 'username'));
    }
}
