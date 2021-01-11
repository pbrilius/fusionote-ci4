<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mention extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'contraint' => 5,
				'auto_increment' => true,
			],
			'sentence' => [
				'type' => 'INT',
				'contraint' => 5,
				'unsigned' => true,
			],
			'user_id' => [
				'type' => 'INT',
				'unsigned' => true,
				'constraint' => 5,
			],
			'offset' => [
				'type' => 'INT',
				'contraint' => 3,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('sentence', 'sentence', 'id', 'RESTRICT', 'CASCADE');
		$this->forge->addForeignKey('user_id', 'user', 'id', 'RESTRICT', 'CASCADE');
		$this->forge->createTable('mention');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('mention');
	}
}
