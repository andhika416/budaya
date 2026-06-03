<?php

namespace App\Controllers;

use App\Models\WargaModel;
use CodeIgniter\Controller;

class Tambahwarga extends Controller
{
    public function index()
    {
        return view('tambah_warga');
    }

    public function store()
    {
        $model = new WargaModel();

        $data = [
            'nama_lengkap'   => $this->request->getPost('nama_lengkap'),
            'nik'            => $this->request->getPost('nik'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'status'         => $this->request->getPost('status'),
            'alamat_asal'    => $this->request->getPost('alamat_asal'),
            'alamat_tujuan'  => $this->request->getPost('alamat_tujuan'),
            'tanggal'        => $this->request->getPost('tanggal'),
            'keterangan'     => $this->request->getPost('keterangan')
        ];

        $model->insert($data);

        return redirect()->to('/admin_data')->with('success', 'Data berhasil disimpan.');
    }
}
