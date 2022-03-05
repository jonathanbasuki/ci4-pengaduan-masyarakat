<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		if (in_groups('admin')) {
			$data = [
				'title' => 'Dashboard Admin | AdaKami Pengaduan Masyarakat',
				'aduan' => $this->pengaduanModel->getPengaduan()->getResultArray(),
			];

			return view('admin/dashboard', ['data' => $data]);
		}

		if (in_groups('user')) {
			$data = [
				'title' => 'Dashboard User | AdaKami Pengaduan Masyarakat',
				'aduan' => $this->pengaduanModel->getPengaduan(user()->id)->getResultArray(),
			];

			return view('user/dashboard', ['data' => $data]);
		}

		if (in_groups('petugas')) {
			$data = [
				'title' => 'Dashboard Petugas | AdaKami Pengaduan Masyarakat',
				'aduan' => $this->pengaduanModel->getPengaduan()->getResultArray(),
			];

			return view('petugas/dashboard', ['data' => $data]);
		}
	}
}
