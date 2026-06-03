<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table = 'surat_pengantar';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    'id_user', 'nama', 'nik', 'alamat', 'keperluan', 'rt', 'rw', 'nomor_surat', 'tanggal', 'status'
    ];

}
