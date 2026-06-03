<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';

    protected $allowedFields = [
        'nik', 'nama', 'username', 'password', 'telepon', 'foto_ktp'
    ];

    protected $useTimestamps = true;

    // App\Models\UserModel.php
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first(); // ini akan mengambil semua kolom
    }

}
