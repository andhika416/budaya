<?php

namespace App\Controllers;

use App\Models\IuranModel;

class Tambahiuran extends BaseController
{
    public function index(): string
    {
        return view('tambah_iuran');
    }

    public function simpan()
    {
        $session = session(); // ambil session
        $id_admin = $session->get('id_admin'); // ambil id_user dari session

        if (!$id_admin) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $model = new IuranModel();

        $data = [
            'id_admin' => $id_admin, // gunakan dari session, BUKAN dari input
            'bulan'           => $this->request->getPost('bulan'),
            'tahun'           => $this->request->getPost('tahun'),
            'total_pemasukan' => $this->request->getPost('total'),
            'keterangan'      => $this->request->getPost('keterangan'),
            'created_at'      => date('Y-m-d H:i:s')
        ];

        $model->insert($data);

        return redirect()->to('/admin_iuran')->with('success', 'Data iuran berhasil disimpan.');
    }
}
