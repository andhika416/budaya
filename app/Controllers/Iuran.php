<?php

namespace App\Controllers;

use App\Models\IuranModel;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Iuran extends BaseController
{
    public function rekap()
    {
        $model = new IuranModel();
        $bulan = $this->request->getGet('bulan');
        $tahun = $this->request->getGet('tahun');

        $data = [
            'iuran' => $model->getFiltered($bulan, $tahun),
            'total' => $model->getTotalLunas($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun
        ];

        return view('iuran/rekap', $data);
    }

    public function exportPdf()
    {
        $model = new IuranModel();
        $bulan = $this->request->getGet('bulan');
        $tahun = $this->request->getGet('tahun');

        $data = [
            'iuran' => $model->getFiltered($bulan, $tahun),
            'total' => $model->getTotalLunas($bulan, $tahun)
        ];

        $dompdf = new Dompdf();
        $html = view('iuran/rekap', $data); // reuse view
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("rekap_iuran.pdf", ["Attachment" => false]);
    }

    public function exportExcel()
    {
        $model = new IuranModel();
        $bulan = $this->request->getGet('bulan');
        $tahun = $this->request->getGet('tahun');
        $data = $model->getFiltered($bulan, $tahun);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->fromArray(['Nama', 'Bulan', 'Tahun', 'Iuran', 'Status', 'Tanggal Bayar'], null, 'A1');

        $row = 2;
        foreach ($data as $d) {
            $sheet->fromArray([
                $d->nama_warga,
                $d->bulan,
                $d->tahun,
                $d->jumlah_iuran,
                $d->status_pembayaran,
                $d->tanggal_bayar
            ], null, "A{$row}");
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="rekap_iuran.xlsx"');
        $writer->save('php://output');
        exit;
    }
}
