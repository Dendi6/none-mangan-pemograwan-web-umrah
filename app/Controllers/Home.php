<?php

namespace App\Controllers;

use App\Models\KotaModel;

class Home extends BaseController
{
	protected $kotaModel;
	public function __construct()
	{
		$this->kotaModel = new KotaModel();
	}
	public function index()
	{
		$data = [
			'title' => 'None Dendi',
			'kota' => $this->kotaModel->findAll()
		];

		return view('beranda/index', $data);
	}
}
