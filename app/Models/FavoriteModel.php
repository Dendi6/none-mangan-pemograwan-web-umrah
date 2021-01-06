<?php

namespace App\Models;

use CodeIgniter\Model;

class FavoriteModel extends Model
{
    protected $table      = 'favorite';
    protected $primaryKey = 'id_favorite';

    protected $allowedFields = ['id_user', 'id_produk'];

    protected $useTimestamps = true;
}
