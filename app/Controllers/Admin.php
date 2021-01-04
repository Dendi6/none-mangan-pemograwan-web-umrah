<?php

namespace App\Controllers;

use App\Models\KotaModel;
use App\Models\produkModel;

class Admin extends BaseController
{
    protected $kotaModel, $produkModel;
    public function __construct()
    {
        $this->kotaModel = new KotaModel();
        $this->produkModel = new produkModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin NONE'
        ];

        return view('admin/beranda/index', $data);
    }

    //berikut adalah daftar fungsi untuk menu kota
    public function kota()
    {
        $data = [
            'title' => 'kota',
            'kota' => $this->kotaModel->findAll()
        ];

        return view('admin/kota/index', $data);
    }
    public function savekota()
    {
        $this->kotaModel->save([
            'nama_kota' => $this->request->getVar('nama_kota')
        ]);

        session()->setFlashdata('pesan', 'kota berhasil di tambahkan');

        return redirect()->to('/admin/kota');
    }
    public function deletekota($id_kota)
    {
        $this->kotaModel->delete($id_kota);

        session()->setFlashdata('delete', 'Data kota sudah di hapus');

        return redirect()->to('/admin/kota');
    }
    public function editKota($id_kota)
    {
        $data = [
            'title' => 'Edit Kota',
            'kota' => $this->kotaModel->cari($id_kota)
        ];

        return view('/admin/kota/edit', $data);
    }
    public function updateKota($id_kota)
    {
        $this->kotaModel->save([
            'id_kota' => $id_kota,
            'nama_kota' => $this->request->getVar('nama_kota')
        ]);

        session()->setFlashdata('pesan', 'Kota Berhasil di Update');

        return redirect()->to('/admin/kota');
    }
    //akhir daftar fungsi menu kota

    //fungsi produck
    public function produk()
    {
        $data = [
            'title' => 'Produk',
            'kota' => $this->kotaModel->findAll(),
            'produk' => $this->produkModel->findAll()
        ];

        return view('admin/produk/index', $data);
    }
    public function saveProduk()
    {
        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');

        //apakah ada file ?
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.png';
        } else {
            //generate nama sampul
            $namaSampul = $fileSampul->getRandomName();

            //pindahkan file kefolder img
            $fileSampul->move('images/produk/', $namaSampul);
        }

        $this->produkModel->save([
            'sampul' => $namaSampul,
            'nama_produk' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kota_asal' => $this->request->getVar('kota'),
            'harga' => $this->request->getVar('harga')
        ]);

        session()->setFlashdata('pesan', 'Produk Berhasil di simpan');

        return redirect()->to('/admin/produk');
    }
    //akhir fungsi produck
}
