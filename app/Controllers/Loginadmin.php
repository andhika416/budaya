<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Loginadmin extends BaseController
{
    public function index()
    {
        return view('login_admin');
    }

    public function submit()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminModel = new AdminModel();
        $admin = $adminModel->getAdminByUsername($username);

        if ($admin && isset($admin['password']) && password_verify($password, $admin['password'])) {
            session()->set([
                'id_admin'   => $admin['id_admin'], // ← ubah dari user_id ke id_user
                'username'  => $admin['username'],
                'password'  => $password, // ATAU kosongkan kalau tidak ingin menampilkan password
                'logged_in_admin' => true
            ]);
            return redirect()->to('/admin');
        } else {
            session()->setFlashdata('error', 'Username atau password salah.');
        return redirect()->to('/login_admin');
        }
    }

    public function daftar()
    {
        return view('daftar_admin');
    }

    public function register()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $confirm  = $this->request->getPost('password_confirm');

        // Validasi sederhana
        if ($password !== $confirm) {
            return redirect()->back()->withInput()->with('error', 'Konfirmasi password tidak cocok.');
        }

        $adminModel = new \App\Models\AdminModel();

        // Cek apakah username sudah ada
        if ($adminModel->where('username', $username)->first()) {
            return redirect()->back()->withInput()->with('error', 'Username sudah digunakan.');
        }

        // Simpan admin baru
        $adminModel->insert([
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/login_admin')->with('success', 'Pendaftaran berhasil. Silakan login.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login_admin');
    }
}
