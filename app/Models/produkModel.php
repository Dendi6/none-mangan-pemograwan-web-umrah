<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id';

    protected $allowedFields = ['sampul', 'nama_produk', 'deskripsi', 'jumlah_suka', 'kota_asal', 'harga'];

    protected $useTimestamps = true;

    public function kotaAsal($id_kota)
    {
        $this->where('kota_asal', $id_kota);
        $query = $this->get();
        $produk = $query->getResultArray();

        return $produk;
    }

    public function semua()
    {
        $this->join('kota', 'kota.id_kota = produk.kota_asal');
        $this->orderBy('kota_asal', 'ASC');
        $query = $this->get();
        $produk = $query->getResultArray();

        return $produk;
    }

    public function cari($id)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        $this->join('kota', 'kota.id_kota = produk.kota_asal');
        $this->orderBy('kota_asal', 'ASC');
        $this->like('nama_produk', $keyword);
        $this->orlike('nama_kota', $keyword);
        $query = $this->get();
        $produk = $query->getResultArray();

        return $produk;
    }
}
