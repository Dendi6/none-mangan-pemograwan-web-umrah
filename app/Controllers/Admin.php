<?php

namespace App\Controllers;

use App\Models\KotaModel;
use App\Models\OngkirModel;
use App\Models\ProdukModel;
use App\Models\PembayaranModel;
use App\Models\TransaksiModel;
use Myth\Auth\Models\UserModel;

class Admin extends BaseController
{
    protected $kotaModel, $produkModel, $pembayaranModel, $userModel, $transaksiModel;
    protected $ongkirModels;
    public function __construct()
    {
        $this->kotaModel = new KotaModel();
        $this->ongkirModel = new ongkirModel();
        $this->produkModel = new ProdukModel();
        $this->transaksiModel = new TransaksiModel();
        $this->pembayaranModel = new PembayaranModel();
        $this->userModel = new UserModel();
        $this->email = \Config\Services::email();

    }

    public function index()
    {
        $data = [
            'title' => 'Admin Mangan Kepri'
        ];

        return view('admin/beranda/index', $data);
    }

    //berikut adalah daftar fungsi untuk ongkir
    public function kota()
    {
        $data = [
            'title' => 'Ongkir',
            'kota' => $this->ongkirModel->findAll()
        ];

        return view('admin/kota/index', $data);
    }
    public function savekota()
    {
        $this->ongkirModel->save([
            'kota' => $this->request->getVar('nama_kota'),
            'hargaOngkir' => $this->request->getVar('harga')
        ]);

        session()->setFlashdata('pesan', 'kota berhasil di tambahkan');

        return redirect()->to('/admin/kota');
    }
    public function deletekota($id)
    {
        $this->ongkirModel->delete($id);

        session()->setFlashdata('delete', 'Data kota sudah di hapus');

        return redirect()->to('/admin/kota');
    }
    public function editKota($id)
    {
        $data = [
            'title' => 'Edit Ongkir',
            'kota' => $this->ongkirModel->cari($id)
        ];

        return view('/admin/kota/edit', $data);
    }
    public function updateKota($id)
    {
        $this->ongkirModel->save([
            'id' => $id,
            'kota' => $this->request->getVar('nama_kota'),
            'hargaOngkir' => $this->request->getVar('harga')
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
    public function deleteProduk($id)
    {
        //cari gambar
        $produk = $this->produkModel->find($id);

        //cek jik gambar default
        if ($produk['sampul'] != "default.jpg") {
            //hapus gambar
            unlink('images/produk/' . $produk['sampul']);
        }
        $this->produkModel->delete($id);

        session()->setFlashdata('delete', 'Produk berhasil di hapus');

        return redirect()->to('/admin/produk');
    }
    public function editProduk($id)
    {
        // dd($this->produkModel->cari($id));
        $data = [
            'title' => 'Edit Produk',
            'produk' => $this->produkModel->cari($id), 
            'kota' => $this->kotaModel->findAll()

        ];

        return view('admin/produk/edit', $data);
    }

    public function updateProduk($id)
    {
        $fileSampul = $this->request->getFile('sampul');

        //cek gambar, apakah berubah atau gambar lama,
        if ($fileSampul->getError() == 4) {
            $namasampul = $this->request->getVar('sampulLama');
        } else {
            //generate file random
            $namasampul = $fileSampul->getRandomName();

            $fileSampul->move('images/produk/', $namasampul);

            //cek jik gambar default
            if ($this->request->getVar('sampulLama') != "default.jpg") {
                //hapus gambar
                unlink('images/produk/' . $this->request->getVar('sampulLama'));
            }
        }

        $this->produkModel->save([
            'id' => $id,
            'nama_produk' => $this->request->getVar('nama'),
            'kota_asal' => $this->request->getVar('kota'),
            'harga' => $this->request->getVar('harga'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'images' => $namasampul
        ]);

        session()->setFlashdata('pesan', 'produk Berhasil Di Update');

        return redirect()->to('/Admin/produk');
    }
    //akhir fungsi produck


    //awal fungsi pembayaran
    public function pembayaran()
    {

        $data = [
            'title' => 'Admin Pembayaran',
            'pembayaran' => $this->pembayaranModel->pembayaran()
        ];

        return view('admin/pembayaran/index', $data);
    }



    //awal fungsi sendemail
    public function sendEmail($id, $key)
    {
        $transaksi = $this->transaksiModel->cari($key);
        $user = $this->userModel->find($transaksi['id_user']);

        $this->email->setTo($user->email);
        $this->email->setSubject('Transaksi ' . $user->username);

        $this->email->setMessage('<p>YTH ' . $user->username . '</p><br>
        
        Transaksi anda dengan key <i><b>' . $transaksi['key'] . '</b></i> Telah disetujui.<br> Barang Sedang dalam proses pengiriman.<br><br><br>
        
        Selalu Berlangganan dengan Kami<br><br><br>
        Mangan Kepri | mangankepri@gmail.com
        ');

        if (!$this->email->send()) {
            session()->setFlashdata('error', 'email tidak terkirim');

            return redirect()->to('/admin/pembayaran');
        } else {
            $this->pembayaranModel->save([
                'id' => $id,
                'status' => 'dikirim'
            ]);

            session()->setFlashdata('pesan', 'Email telah terkirim');

            return redirect()->to('/admin/pembayaran');
        }

    }
}
