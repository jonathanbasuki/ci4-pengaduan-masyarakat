<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengaduanTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'tanggal' => [
				'type' => 'date',
			],
			'nik' => [
				'type' => 'char',
				'constraint' => 16,
			],
			'laporan'    => [
				'type' => 'text',
			],
			'foto'    => [
				'type' => 'text',
			],
			'status' => [
				'type' => 'enum',
				'constraint' => ['Belum Diproses', 'Diproses', 'Selesai'],
				'default' => 'Belum Diproses',
			],
		]);

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('nik', 'users', 'nik', 'CASCADE');
		$this->forge->createTable('pengaduan');
	}

	public function down()
	{
        //
	}
}
