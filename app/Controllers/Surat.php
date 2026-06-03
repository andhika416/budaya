<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use App\Models\SuratModel;

class Surat extends BaseController
{
    public function index(): string
    {
        $session = session();
        $id_user = $session->get('id_user');

        $model = new \App\Models\SuratModel();
        $data['surat'] = $model->where('id_user', $id_user)->orderBy('id', 'DESC')->findAll();

        return view('surat', $data);
    }


    public function proses()
    {
        $session = session(); // ambil session
        $id_user = $session->get('id_user'); // ambil id_user dari session

        if (!$id_user) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $model = new SuratModel();

        $nomorSurat = $this->generateNomorSurat();
        $tanggal = date('Y-m-d'); // Format MySQL

        $data = [
            'id_user' => $id_user,
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'alamat' => $this->request->getPost('alamat'),
            'keperluan' => $this->request->getPost('keperluan'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'tanggal' => $tanggal,
            'nomor_surat' => $nomorSurat,
            'status' => 'pending'
        ];

        $model->insert($data);

        return redirect()->to('/surat')->with('success', 'Permintaan surat berhasil dikirim. Menunggu validasi dari admin.');

        $data['tanggal'] = date('d F Y'); // untuk tampilan cetak
        $html = view('cetak_surat', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("surat_pengantar.pdf", ['Attachment' => false]);
    }

    private function generateNomorSurat()
    {
        $no = rand(100, 999);
        $bulanRomawi = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];
        $bulan = date('n');
        $tahun = date('Y');

        return sprintf("%03d/RT/RW/%s/%s", $no, $bulanRomawi[$bulan - 1], $tahun);
    }

    public function cetak($id)
    {
        $session = session();
        $id_user = $session->get('id_user');

        $model = new \App\Models\SuratModel();
        $surat = $model->where('id', $id)->where('id_user', $id_user)->first();

        if (!$surat || $surat['status'] !== 'disetujui') {
            return redirect()->to('/surat')->with('error', 'Surat belum disetujui atau tidak ditemukan.');
        }

        $surat['tanggal'] = date('d F Y');
        $html = view('cetak_surat', $surat);

        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("surat_pengantar.pdf", ['Attachment' => false]);
    }

}
