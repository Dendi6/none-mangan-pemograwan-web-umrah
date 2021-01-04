<?php

namespace App\Models;

use CodeIgniter\Model;

class KotaModel extends Model
{
    protected $table      = 'kota';
    protected $primaryKey = 'id_kota';

    protected $allowedFields = ['nama_kota'];

    protected $useTimestamps = true;
}
