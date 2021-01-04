<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id';

    protected $allowedFields = ['sampul', 'nama_produk', 'deskripsi', 'kota_asal', 'harga'];

    protected $useTimestamps = true;
}
