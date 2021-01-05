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

		$builder->where('kota_asal', 2);
		$query = $builder->get();
		$batam = $query->getResultArray();

		$builder->where('kota_asal', 3);
		$query = $builder->get();
		$lingga = $query->getResultArray();

		$data = [
			'title' => 'None Dendi',
			'kota' => $this->kotaModel->findAll(),
			'tanjungpinang' => $tanjungpinang,
			'batam' => $batam,
			'lingga' => $lingga
		];

		return view('beranda/index', $data);
	}
}
