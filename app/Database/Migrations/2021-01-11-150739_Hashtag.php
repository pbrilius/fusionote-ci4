<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hashtag extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'sentence' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
			'label' => [
				'type' => 'VARCHAR',
				'constraint' => '256',
			],
			'offset' => [
				'type' => 'INT',
				'contraint' => '3',
			],
		]);
		$this->forge->addForeignKey('sentence', 'sentence', 'id', 'RESTRICT', 'CASCADe');
		$this->forge->addKey('id', true);
		$this->forge->createTable('hashtag');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('hashtag');
	}
}
