<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Adminlaporan extends BaseController
{
    public function index(): string
    {
        $model = new LaporanModel();
        $data['laporan'] = $model->findAll(); // ambil semua data laporan

        return view('admin_laporan', $data);
    }

    public function hapus($id)
    {
        $model = new \App\Models\LaporanModel();
        $model->delete($id);

        return redirect()->to('/admin_laporan')->with('success', 'Laporan berhasil dihapus.');
    }

}
