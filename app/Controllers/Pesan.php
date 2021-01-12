<?php

namespace App\Controllers;

use App\Models\OngkirModel;
use App\Models\PembayaranModel;
use App\Models\ProdukModel;
use App\Models\TransaksiModel;

class Pesan extends BaseController
{
    protected $produkModel, $transaksiModel, $pembayaranModel, $ongkirModel;
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->produkModel = new ProdukModel();
        $this->transaksiModel = new TransaksiModel();
        $this->pembayaranModel = new PembayaranModel();
        $this->ongkirModel = new OngkirModel();
    }

    public function index($id)
    {

        $data = [
            'title' => 'Pesan',
            'transaksi' => $this->transaksiModel->transaksi($id)
        ];

        return view('beranda/pesan/index', $data);
    }
    public function jumlah($id_produk)
    {
        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->produkModel->cari($id_produk),
            'kota' => $this->ongkirModel->findAll()
        ];

        return view('beranda/pesan/jumlah', $data);
    }
    public function saveTransaksi()
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
            'id_ongkir' => $this->request->getVar('ongkir'),
            'alamat' => $this->request->getVar('alamat')
        ]);

        return redirect()->to('/pesan/pembayaran/' . $key);
    }

    //fungsi pembayaran
    public function pembayaran($key)
    {
        $data = [
            'title' => 'pembayaran',
            'transaksi' => $this->transaksiModel->cari($key)
        ];

        return view('beranda/pesan/pembayaran', $data);
    }
    public function savePembayaran()
    {
        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');

        //apakah ada file ?
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.jpg';
        } else {
            //generate nama sampul
            $namaSampul = $fileSampul->getRandomName();

            //pindahkan file kefolder img
            $fileSampul->move('images/pembayaran/', $namaSampul);
        }

        $this->pembayaranModel->save([
            'bukti' => $namaSampul,
            'nama' => $this->request->getVar('nama'),
            'key' => $this->request->getVar('key'),
            'status' => $this->request->getVar('status')
        ]);

        return redirect()->to('/home/waiting');
    }
}
