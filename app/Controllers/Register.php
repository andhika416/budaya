<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function process()
    {
        $userModel = new UserModel();

        $foto_ktp = $this->request->getFile('foto_ktp');
        $fotoName = $foto_ktp->getRandomName();

        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'telepon' => $this->request->getPost('telepon'),
            'foto_ktp' => $fotoName,
        ];

        // Pindahkan file foto ke folder public/uploads/ktp/
        if ($foto_ktp->isValid() && !$foto_ktp->hasMoved()) {
            $foto_ktp->move('uploads/ktp/', $fotoName);
        }

        $userModel->save($data);

        session()->setFlashdata('success', 'Pendaftaran berhasil! Silakan login.');
        return redirect()->to('/login');
    }
}
