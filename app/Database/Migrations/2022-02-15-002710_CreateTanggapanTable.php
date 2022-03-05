<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTanggapanTable extends Migration
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
			'id_pengaduan' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
			],
			'tanggal' => [
				'type' => 'date',
			],
			'tanggapan' => [
				'type' => 'text',
			],
			'id_petugas' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
			],
		]);

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('id_pengaduan', 'pengaduan', 'id', 'CASCADE');
		$this->forge->addForeignKey('id_petugas', 'users', 'id', 'CASCADE');
		$this->forge->createTable('tanggapan');
	}

	public function down()
	{
        //
	}
}
