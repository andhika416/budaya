<?php

namespace App\Controllers;

use App\Models\WargaModel;

class Warga extends BaseController
{
    //public function index()
    //{
    //    $model = new WargaModel();
    //    $data['warga'] = $model->findAll();
    //    return view('warga/index', $data);
    //}

    public function index()
    {
        // Redirect ke halaman tambah_warga
        return redirect()->to('/tambah_warga');
    }


    public function store()
    {
        $model = new WargaModel();
        $model->insert($this->request->getPost());
        return redirect()->to('/warga')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $model = new WargaModel();
        $data['warga'] = $model->find($id);
        return view('warga/edit', $data);
    }

    public function update($id)
    {
        $model = new WargaModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('/warga')->with('success', 'Data berhasil diperbarui');
    }

    public function delete($id)
    {
        $model = new WargaModel();
        $model->delete($id);
        return redirect()->to('/warga')->with('success', 'Data berhasil dihapus');
    }
}
