<?php

namespace App\Controllers;
use App\Models\IuranModel;

class Adminiuran extends BaseController
{
    public function index(): string
    {
        $model = new IuranModel();
        $data['iuran'] = $model->findAll(); // Ambil semua data

        return view('admin_iuran', $data);
    }

    public function simpan_pemasukan()
    {
        $model = new \App\Models\IuranModel();

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'bulan' => 'required',
            'tahun' => 'required|numeric',
            'total' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data ke database
        $model->save([
            'bulan' => $this->request->getPost('bulan'),
            'tahun' => $this->request->getPost('tahun'),
            'total_pemasukan' => $this->request->getPost('total'),
            'keterangan' => $this->request->getPost('keterangan'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/admin_iuran')->with('success', 'Data iuran berhasil disimpan.');
    }

}
