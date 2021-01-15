<?php

namespace App\Models;

use CodeIgniter\Model;

class OngkirModel extends Model
{
    protected $table      = 'ongkir';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama_kota', 'hargaOngkir'];

    protected $useTimestamps = true;

    //find onkgir yang berdasarkan id
    public function cari($id)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
