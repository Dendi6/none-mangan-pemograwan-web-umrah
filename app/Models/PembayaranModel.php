<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table      = 'pembayaran';
    protected $primaryKey = 'id';

    protected $allowedFields = ['key', 'nama', 'bukti', 'status'];

    protected $useTimestamps = true;

    public function pembayaran()
    {
        $this->orderBy('created_at', 'DESC');
        $query = $this->get();
        $pembayaran = $query->getResultArray();

        return $pembayaran;
    }
    public function sendEmail($id)
    {
        $this->join('transaksi', 'transaksi.key = pembayaran.key');
        $this->where('id', $id);
        $query = $this->get();
        $pembayaran = $query->getResultArray();

        return $pembayaran;
    }
}
