<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '256',
			],
			'first_name' => [
				'type' => 'VARCHAR',
				'constraint' => 32,
			],
			'last_name' => [
				'type' => 'VARCHAR',
				'constraint' => 64,
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
