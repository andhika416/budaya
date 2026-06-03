<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login_user');
    }

    public function submit()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->getUserByUsername($username);

        if ($user && isset($user['password']) && password_verify($password, $user['password'])) {
            session()->set([
                'id_user'   => $user['id_user'], // ← ubah dari user_id ke id_user
                'nik'       => $user['nik'],
                'nama'      => $user['nama'],
                'username'  => $user['username'],
                'password'  => $password, // ATAU kosongkan kalau tidak ingin menampilkan password
                'telepon'   => $user['telepon'],
                'foto_ktp'  => $user['foto_ktp'],
                'logged_in' => true
            ]);
            return redirect()->to('/home');
        } else {
            session()->setFlashdata('error', 'Username atau password salah.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
