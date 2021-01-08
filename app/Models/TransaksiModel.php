<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $allowedFields = ['key', 'id_produk', 'id_user', 'jumlah_pesanan', 'harga_total'];

    protected $useTimestamps = true;

    //find kota yang berdasarkan id
    public function cari($key)
    {
        if ($key == false) {
            return $this->findAll();
        }

        return $this->where(['key' => $key])->first();
    }
    public function transaksi($id)
    {
        $this->join('produk', 'produk.id = transaksi.id_produk');
        $this->where('id_user', $id);
        $query = $this->get();
        $transaksi = $query->getResultArray();

        return $transaksi;
    }
}
