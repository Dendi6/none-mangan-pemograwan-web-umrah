<?php

namespace App\Controllers;

use App\Models\KotaModel;

class Admin extends BaseController
{
    protected $kotaModel;
    public function __construct()
    {
        $this->kotaModel = new KotaModel();
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
    //akhir daftar fungsi menu kota
}
