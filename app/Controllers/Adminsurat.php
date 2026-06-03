<?php

namespace App\Controllers;

use App\Models\SuratModel;

class AdminSurat extends BaseController
{
    public function index()
    {
        $model = new SuratModel();
        $data['surat'] = $model->findAll();

        return view('admin_surat', $data);
    }

    public function delete($id)
    {
        $model = new SuratModel();
        $model->delete($id);

        return redirect()->to('/admin_surat');
    }
    public function setujui($id)
    {
        $model = new SuratModel();
        $model->update($id, ['status' => 'disetujui']);
        return redirect()->to('/admin_surat')->with('success', 'Surat disetujui');
    }

    public function tolak($id)
    {
        $model = new SuratModel();
        $model->update($id, ['status' => 'ditolak']);
        return redirect()->to('/admin_surat')->with('success', 'Surat ditolak');
    }

    public function cetak($id)
    {
        $model = new SuratModel();
        $data = $model->find($id);

        if (!$data || $data['status'] !== 'disetujui') {
            return redirect()->to('/admin_surat')->with('error', 'Surat belum disetujui atau tidak ditemukan');
        }

        $data['tanggal'] = date('d F Y');
        $html = view('cetak_surat', $data);

        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("surat_pengantar.pdf", ['Attachment' => false]);
    }

}
