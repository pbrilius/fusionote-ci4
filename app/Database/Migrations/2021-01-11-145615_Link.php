<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Link extends Migration
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
				'unsigned' => true,
				'constraint' => 5,
			],
			'offset' => [
				'type' => 'INT',
				'contraint' => 3,
			],
			'preview' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'link' => [
				'type' => 'VARCHAR',
				'constraint' => '512',
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('sentence', 'sentence', 'id', 'RESTRICT', 'CASCADE');
		$this->forge->createTable('link');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('link');
	}
}
