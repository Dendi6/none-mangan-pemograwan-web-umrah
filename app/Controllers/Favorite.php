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
        $db      = \Config\Database::connect();
        $builder = $db->table('favorite');

        $builder->select('nama_produk, favorite.created_at as created');
        $builder->join('produk', 'produk.id = favorite.id_produk');
        $builder->where('id_user', $id);
        $query = $builder->get();
        $favorite = $query->getResultArray();

        $data = [
            'title' => 'Favorite',
            'favorite' => $favorite
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
