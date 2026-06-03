<?php

namespace App\Models;

use CodeIgniter\Model;

class WargaModel extends Model
{
    protected $table = 'warga';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_lengkap',
        'nik',
        'jenis_kelamin',
        'status',
        'alamat_asal',
        'alamat_tujuan',
        'tanggal',
        'keterangan',
        'created_at'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = ''; // Kosongkan karena tidak ada updated_at
}
