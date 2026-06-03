<?php

namespace App\Controllers;
use App\Models\IuranModel;

class Editiuran extends BaseController
{
    public function index($id): string
    {
        $model = new IuranModel();
        $data['iuran_sampah'] = $model->find($id); // ambil data berdasarkan id
        return view('edit_iuran', $data);
    }

    public function update($id)
    {
        $model = new IuranModel();

        $data = [
            'bulan'           => $this->request->getPost('bulan'),
            'tahun'           => $this->request->getPost('tahun'),
            'total_pemasukan' => $this->request->getPost('total'),
            'keterangan'      => $this->request->getPost('keterangan'),
            'created_at'      => date('Y-m-d H:i:s')
        ];

        $model->update($id, $data);
        return redirect()->to('/admin_iuran')->with('success', 'Data iuran berhasil diperbarui.');
    }
}
