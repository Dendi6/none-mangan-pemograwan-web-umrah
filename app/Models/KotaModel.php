<?php

namespace App\Models;

use CodeIgniter\Model;

class KotaModel extends Model
{
    protected $table      = 'kota';
    protected $primaryKey = 'id_kota';

    protected $allowedFields = ['nama_kota'];

    protected $useTimestamps = true;

    //find kota yang berdasarkan id
    public function cari($id_kota)
    {
        if ($id_kota == false) {
            return $this->findAll();
        }

        return $this->where(['id_kota' => $id_kota])->first();
    }
}
