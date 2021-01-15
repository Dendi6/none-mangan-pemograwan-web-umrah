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
		$tanjungpinang = $this->produkModel->kotaAsal(1);
		$batam = $this->produkModel->kotaAsal(2);
		$lingga = $this->produkModel->kotaAsal(3);

		$data = [
			'title' => 'None Dendi',
			'kota' => $this->kotaModel->findAll(),
			'tanjungpinang' => $tanjungpinang,
			'batam' => $batam,
			'lingga' => $lingga
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
	public function waiting($key)
	{
		$data = [
			'title' => 'waiting',
			'key' => $key
		];

		return view('beranda/waiting/index', $data);
	}
}
