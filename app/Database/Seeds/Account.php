<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Account extends Seeder
{
	public function run()
	{
		// Admin Account
		$data = [
			'email' => 'admin@pengaduanmasyarakat.org',
			'nama' => 'Administrator',
			'username' => 'admin',
			'password_hash' => password_hash(base64_encode(hash('sha384', 'admin', true)), PASSWORD_DEFAULT, [10]),
			'active' => 1,
			'created_at' => date('Y-m-d H:i:s'),
		];

		$this->db->table('users')->insert($data);
	}
}
