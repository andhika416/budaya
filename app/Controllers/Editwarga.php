<?php

namespace App\Controllers;
use App\Models\WargaModel;

class Editwarga extends BaseController
{
    public function index($id = null)
    {
        $model = new WargaModel();
        $data['warga'] = $model->find($id); // ambil data berdasarkan id
        return view('edit_warga', $data);
    }

    public function update($id)
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

        $model->update($id, $data);
        return redirect()->to('/admin_data')->with('success', 'Data warga berhasil diperbarui.');
    }
}
