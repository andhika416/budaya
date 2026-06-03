<?php

namespace App\Controllers;
use App\Models\WargaModel;

class Agenda extends BaseController
{
    public function index(): string
    {
        $model = new WargaModel();
        $data['warga'] = $model->findAll(); // ambil semua data warga
        return view('agenda', $data);
    }
}
