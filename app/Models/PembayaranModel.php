<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table      = 'pembayaran';
    protected $primaryKey = 'id';

    protected $allowedFields = ['key', 'nama', 'bukti', 'status', 'totalHarga'];

    protected $useTimestamps = true;


   public function pembayaran()
    {

        // dd($this->findAll());
        $this->select('pembayaran.key as kode, nama, bukti, status, kota, alamat, totalHarga, pembayaran.id as id');
        $this->join('transaksi', 'transaksi.key = pembayaran.key');

        $this->join('ongkir', 'ongkir.id = transaksi.id_ongkir');
        $this->orderBy('id', 'DESC');
        $query = $this->get();
        $pembayaran = $query->getResultArray();

        return $pembayaran;
    }
}
