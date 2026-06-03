<?php

namespace App\Controllers;
use App\Models\WargaModel;


class Admindata extends BaseController
{
    public function index()
    {
        $wargaModel = new WargaModel();

        // Ambil semua data warga
        $data['warga'] = $wargaModel->findAll();

        return view('admin_data', $data);
    }
}
