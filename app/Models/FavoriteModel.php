<?php

namespace App\Models;

use CodeIgniter\Model;

class FavoriteModel extends Model
{
    protected $table      = 'favorite';
    protected $primaryKey = 'id_favorite';

    protected $allowedFields = ['id_user', 'id_produk'];

    protected $useTimestamps = true;

    public function favorite($id)
    {
        $this->select('nama_produk, favorite.created_at as created');
        $this->join('produk', 'produk.id = favorite.id_produk');
        $this->orderBy('created', 'DESC');
        $this->where('id_user', $id);
        $query = $this->get();
        $favorite = $query->getResultArray();

        return $favorite;
    }
}
