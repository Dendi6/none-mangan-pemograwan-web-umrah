<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'None Dendi'
		];

		return view('beranda/index', $data);
	}
}
