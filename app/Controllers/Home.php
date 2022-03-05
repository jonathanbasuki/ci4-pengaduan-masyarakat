<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'AdaKami | Pengaduan Masyarakat',
		];

		return view('index', ['data' => $data]);
	}
}
