<?php

namespace App\Models;

use CodeIgniter\Model;

class FormaturModel extends Model
{
    protected $table = 'calonformatur';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
    protected $allowedFields = ['nama', 'nim', 'angkatan']; //table yang diizinkan untuk di kelola
}
