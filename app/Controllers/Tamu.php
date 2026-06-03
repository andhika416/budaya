<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Tamu extends BaseController
{
    public function index()
    {
        return view('tamu');
    }

    public function kirim()
    {
        $session = session(); // ambil session
        $id_user = $session->get('id_user'); // ambil id_user dari session

        if (!$id_user) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $model = new LaporanModel();
        $data = [
            'id_user' => $id_user, // gunakan dari session, BUKAN dari input
            'nama'    => $this->request->getPost('nama'),
            'laporan' => $this->request->getPost('laporan'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];

        $model->insert($data);
        return redirect()->to('/tamu')->with('success', 'Laporan berhasil dikirim.');
    }

}
