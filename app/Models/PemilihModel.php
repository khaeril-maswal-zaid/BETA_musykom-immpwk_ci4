<?php

namespace App\Models;

use CodeIgniter\Model;

class PemilihModel extends Model
{
    protected $table = 'pesertapemilih';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
    protected $allowedFields = ['nama', 'nim', 'angkatan', 'statuspilih']; //table yang diizinkan untuk di kelola
}
