<?php

namespace App\Controllers;

use App\Models\KotaModel;
use App\Models\ProdukModel;

class Home extends BaseController
{
	protected $kotaModel, $produkModel;
	public function __construct()
	{
		$this->kotaModel = new KotaModel();
		$this->produkModel = new ProdukModel();
	}
	public function index()
	{
		$db      = \Config\Database::connect();
		$builder = $db->table('produk');

		$builder->where('kota_asal', 1);
		$query = $builder->get();
		$tanjungpinang = $query->getResultArray();

		$data = [
			'title' => 'None Dendi',
			'kota' => $this->kotaModel->findAll(),
			'tanjungpinang' => $tanjungpinang
		];

		return view('beranda/index', $data);
	}
}
