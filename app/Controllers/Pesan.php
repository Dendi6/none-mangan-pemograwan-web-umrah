<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\TransaksiModel;

class Pesan extends BaseController
{
    protected $produkModel, $transaksiModel;
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->produkModel = new ProdukModel();
        $this->transaksiModel = new TransaksiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pesan'
        ];

        return view('beranda/pesan/index', $data);
    }
    public function jumlah($id_produk)
    {
        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->produkModel->cari($id_produk)
        ];

        return view('beranda/pesan/jumlah', $data);
    }
    public function saveTransaksi($id)
    {
        //helper text
        helper('text');

        $user_id = $this->request->getVar('id_user');
        $jumlah_pesanan = $this->request->getVar('jumlah_pesanan');
        $harga_total = $this->request->getVar('jumlah_pesanan') * $this->request->getVar('harga');

        //generate random
        $random = $user_id . $jumlah_pesanan . $harga_total;
        $key = random_string($random, 6);

        $this->transaksiModel->save([
            'key' => $key,
            'id_produk' => $this->request->getVar('id_produk'),
            'id_user' => $user_id,
            'jumlah_pesanan' => $jumlah_pesanan,
            'harga_total' => $harga_total,
            'status' => $this->request->getVar('status')
        ]);

        return redirect()->to('/pesan/pembayaran/' . $key);
    }
    public function pembayaran($key)
    {
        $data = [
            'title' => 'pembayaran',
            'transaksi' => $this->transaksiModel->cari($key)
        ];

        return view('beranda/pesan/pembayaran', $data);
    }
}
