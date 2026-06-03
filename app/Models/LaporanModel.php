<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan_warga';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'nama', 'laporan', 'tanggal'];
}
