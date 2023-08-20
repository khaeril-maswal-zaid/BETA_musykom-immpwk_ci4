<?php

namespace App\Models;

use CodeIgniter\Model;

class BiliksuaraModel extends Model
{
    protected $table = 'biliksuara';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
    protected $allowedFields = ['nama', 'nim', 'angkatan']; //table yang diizinkan untuk di kelola
}
