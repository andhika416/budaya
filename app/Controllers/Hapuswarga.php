<?php

namespace App\Controllers;

use App\Models\WargaModel;

class Hapuswarga extends BaseController
{
    public function index($id)
    {
        $model = new WargaModel();

        // Cek apakah data dengan ID tersebut ada
        $warga = $model->find($id);
        if (!$warga) {
            return redirect()->to('/admin_data')->with('error', 'Data tidak ditemukan.');
        }

        // Hapus data
        $model->delete($id);

        return redirect()->to('/admin_data')->with('success', 'Data warga berhasil dihapus.');
    }
}
