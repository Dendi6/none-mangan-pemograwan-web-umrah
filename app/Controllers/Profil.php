<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class Profil extends BaseController
{
    protected $profilModel;
    public function __construct()
    {
        $this->profilModel = new UserModel();
    }

    //Halaman profil
    public function index()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil/index', $data);
    }

    //edit profil
    public function edit()
    {
        $data = [
            'title' => 'Edit Profil',
        ];
        return view('profil/edit', $data);
    }

    // public function update($id)
    // {

    //     $fileSampul = $this->request->getFile('sampul');

    //     //cek gambar, apakah berubah atau gambar lama,
    //     if ($fileSampul->getError() == 4) {
    //         $namasampul = $this->request->getVar('sampulLama');
    //     } else {
    //         //generate file random
    //         $namasampul = $fileSampul->getRandomName();

    //         $fileSampul->move('img/profil/', $namasampul);

    //         //cek jik gambar default
    //         if ($this->request->getVar('sampulLama') != "default.jpg") {
    //             //hapus gambar
    //             unlink('img/profil/' . $this->request->getVar('sampulLama'));
    //         }
    //     }

    //     $this->profilModel->save([
    //         'id' => $id,
    //         'email' => $this->request->getVar('email'),
    //         'nama' => $this->request->getVar('nama'),
    //         'tempatLahir' => $this->request->getVar('tmpLahir'),
    //         'tanggalLahir' => $this->request->getVar('tanggalLahir'),
    //         'alamat' => $this->request->getVar('alamat'),
    //         'noHp' => $this->request->getVar('noHp'),
    //         'images' => $namasampul
    //     ]);

    //     // session()->setFlashdata('pesan', 'Profil Berhasil di Update');

    //     return redirect()->to('/profil');
    // }
}
