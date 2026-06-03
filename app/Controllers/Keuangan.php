<?php

namespace App\Controllers;
use App\Models\IuranModel;

class Keuangan extends BaseController
{
    public function index()
    {
        $model = new IuranModel();
        $data['iuran'] = $model->findAll(); // Ambil semua data dari tabel iuran_sampah
        return view('keuangan', $data);
    }
}
