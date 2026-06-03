<?php

namespace App\Controllers;

use App\Models\WargaModel;
use App\Models\LaporanWargaModel;
use App\Models\SuratPengantarModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();

        // Hitung warga pindah
        $wargaPindah = $db->table('warga')->where('status', 'pindah')->countAllResults();

        // Hitung warga tinggal
        $wargaTinggal = $db->table('warga')->where('status', 'tinggal')->countAllResults();

        // Hitung laporan warga
        $laporanWarga = $db->table('laporan_warga')->countAllResults();

        // Hitung surat pengantar
        $suratPengantar = $db->table('surat_pengantar')->countAllResults();

        return view('admin', [
            'wargaPindah' => $wargaPindah,
            'wargaTinggal' => $wargaTinggal,
            'laporanWarga' => $laporanWarga,
            'suratPengantar' => $suratPengantar,
        ]);
    }
}
