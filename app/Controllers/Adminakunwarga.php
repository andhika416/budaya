<?php

namespace App\Controllers;

use App\Models\UserModel;

class Adminakunwarga extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll(); // ambil semua user dari tabel
        return view('admin_akunwarga', $data);
    }

    public function delete($id)
    {
        $userModel = new UserModel();

        // cek apakah user ada
        $user = $userModel->find($id);
        if (!$user) {
            return redirect()->to('/admin_akunwarga')->with('error', 'User tidak ditemukan');
        }

        // hapus file foto KTP jika ada
        if (!empty($user['foto_ktp'])) {
            $filePath = WRITEPATH . '../public/uploads/ktp/' . $user['foto_ktp'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $userModel->delete($id);
        return redirect()->to('/admin_akunwarga')->with('success', 'User berhasil dihapus');
    }
}
