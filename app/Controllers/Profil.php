<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index(): string
    {
        // Ambil data dari session
        $data = [
            'nik'      => session()->get('nik'),
            'nama'     => session()->get('nama'),
            'username' => session()->get('username'),
            'password' => session()->get('password'),
            'telepon'  => session()->get('telepon'),
            'foto_ktp' => session()->get('foto_ktp')
        ];

        return view('profil', $data);
    }
}
