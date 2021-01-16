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
		$natuna = $query->getResultArray();

		$builder->where('kota_asal', 5);
		$query = $builder->get();
		$anambas = $query->getResultArray();

		$builder->where('kota_asal', 6);
		$query = $builder->get();
		$lingga = $query->getResultArray();

		$builder->where('kota_asal', 4);
		$query = $builder->get();
		$karimun = $query->getResultArray();



		$data = [
			'title' => 'Mangan Kepri',
			'kota' => $this->kotaModel->findAll(),
			'tanjungpinang' => $tanjungpinang,
			'batam' => $batam,
			'natuna' => $natuna,
			'anambas' => $anambas,
			'lingga' => $lingga,
			'karimun' => $karimun

		];

		return view('beranda/index', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'tentang kami'
		];

		return view('beranda/about/about', $data);
	}

	//fungsi waiting
	public function waiting($key)
	{
		$data = [
			'title' => 'waiting',
			'key' => $key
		];

		return view('beranda/waiting/index', $data);
		
	}
}
