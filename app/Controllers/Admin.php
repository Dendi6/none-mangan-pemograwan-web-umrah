<?php

namespace App\Controllers;

use App\Models\KotaModel;
use App\Models\PembayaranModel;
use App\Models\ProdukModel;
use App\Models\TransaksiModel;
use Myth\Auth\Models\UserModel;

class Admin extends BaseController
{
    protected $kotaModel, $produkModel, $pembayaranModel, $userModel, $tanskasiModel;
    public function __construct()
    {
        $this->kotaModel = new KotaModel();
        $this->produkModel = new ProdukModel();
        $this->pembayaranModel = new PembayaranModel();
        $this->transaksiModel = new TransaksiModel();
        $this->userModel = new UserModel();
        $this->email = \Config\Services::email();
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
            'produk' => $this->produkModel->semua()
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
            'produk' => $this->produkModel->cari($id)
        ];

        return view('admin/produk/edit', $data);
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
    public function sendEmail($id, $key)
    {
        $transaksi = $this->transaksiModel->cari($key);
        $user = $this->userModel->find($transaksi['id_user']);

        // $this->email->setFrom('none2021.umrah@gmail.com', 'None');
        $this->email->setTo($user->email);
        $this->email->setSubject('Transaksi ' . $user->username);

        $this->email->setMessage('<p>YTH ' . $user->username . '</p><br>
        
        Transaksi anda dengan key <i><b>' . $transaksi['key'] . '</b></i> Telah disetujui.<br> Barang Sedang dalam proses pengiriman.<br><br><br>
        
        Selalu Berlangganan dengan Kami<br><br><br>
        TIM NONE | None2021.umrah@gmail.com
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
