<?php

namespace App\Models;

use CodeIgniter\Model;

class OngkirModel extends Model
{
    protected $table      = 'ongkir';
    protected $primaryKey = 'id';

    protected $allowedFields = ['kota', 'hargaOngkir'];

    protected $useTimestamps = true;

    //find ongkir yang berdasarkan id
      public function cari($id)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

}
