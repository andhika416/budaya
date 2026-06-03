<?php

namespace App\Controllers;

class Profiladmin extends BaseController
{
    public function index(): string
    {
        // Ambil data dari session
        $data = [
            'username' => session()->get('username'),
            'password' => session()->get('password'),
        ];

        return view('profil_admin', $data);
    }
}
