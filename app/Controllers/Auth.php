<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Sementara, tanpa cek ke database
        if ($username == 'admin' && $password == 'admin123') {
            return redirect()->to('/dashboard');
        } else {
            return view('login_user', ['error' => 'Username atau password salah']);
        }
    }
}
