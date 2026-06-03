<?php

namespace App\Controllers;

use App\Models\IuranModel;

class Hapusiuran extends BaseController
{
    public function index($id)
    {
        $model = new IuranModel();

        // Cek apakah data dengan ID tersebut ada
        $iuran = $model->find($id);
        if (!$iuran) {
            return redirect()->to('/admin_iuran')->with('error', 'Data tidak ditemukan.');
        }

        // Hapus data
        $model->delete($id);

        return redirect()->to('/admin_iuran')->with('success', 'Data warga berhasil dihapus.');
    }
}
