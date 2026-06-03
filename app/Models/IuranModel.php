<?php

namespace App\Models;

use CodeIgniter\Model;

class IuranModel extends Model
{
    protected $table = 'iuran_sampah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_admin', 'bulan', 'tahun', 'total_pemasukan', 'keterangan', 'created_at'];

    public function getFiltered($bulan = null, $tahun = null)
    {
        $builder = $this->db->table($this->table);
        if ($bulan) {
            $builder->where('bulan', $bulan);
        }
        if ($tahun) {
            $builder->where('tahun', $tahun);
        }
        return $builder->get()->getResult();
    }

    public function getTotalLunas($bulan = null, $tahun = null)
    {
        $builder = $this->db->table($this->table)
            ->selectSum('total_pemasukan')
            ->where('keterangan', 'Lunas');

        if ($bulan) {
            $builder->where('bulan', $bulan);
        }
        if ($tahun) {
            $builder->where('tahun', $tahun);
        }

        return $builder->get()->getRow()->total_pemasukan ?? 0;
    }
}
