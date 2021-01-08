<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProdukModel;

class Favorite extends BaseController
{
    protected $favoriteModel, $produkModel;
    public function __construct()
    {
        $this->favoriteModel = new FavoriteModel();
        $this->produkModel = new ProdukModel();
    }

    public function index($id)
    {
        $data = [
            'title' => 'Favorite',
            'favorite' => $this->favoriteModel->favorite($id)
        ];

        return view('beranda/favorite/index', $data);
    }
    public function save($id_produk, $id_user)
    {
        $produk = $this->produkModel->find($id_produk);

        $this->produkModel->save([
            'id' => $id_produk,
            'jumlah_suka' => $produk['jumlah_suka'] + 1
        ]);

        $this->favoriteModel->save([
            'id_user' => $id_user,
            'id_produk' => $id_produk
        ]);

        return redirect()->to('/home');
    }
}
