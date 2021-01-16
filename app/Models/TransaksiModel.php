<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $allowedFields = ['key', 'id_produk', 'id_user', 'jumlah_pesanan', 'id_ongkir', 'alamat'];

    protected $useTimestamps = true;

    //find kota yang berdasarkan id
    public function cari($key)
    {
        if ($key == false) {
            return $this->findAll();
        }
        
        $this->join('produk', 'produk.id = transaksi.id_produk');
        $this->join('ongkir', 'ongkir.id = transaksi.id_ongkir');

        return $this->where(['key' => $key])->first();

    }

    public function transaksi($id)
    {
        $this->select('transaksi.key as key, nama_produk, jumlah_pesanan, status, transaksi.created_at as created');
        $this->join('produk', 'produk.id = transaksi.id_produk');
        $this->join('pembayaran', 'pembayaran.key = transaksi.key');
        $this->where('id_user', $id);
        $this->orderBy('created', 'DESC');
        $query = $this->get();
        $transaksi = $query->getResultArray();

        return $transaksi;
    }
}
