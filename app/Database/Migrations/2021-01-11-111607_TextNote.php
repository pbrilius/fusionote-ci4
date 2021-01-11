<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TextNote extends Migration
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
			'label' => [
				'type' => 'VARCHAR',
				'constraint' => 256,
			],
			'text' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'user_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
		]);

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('user_id', 'user', 'id', 'RESTRICT', 'CASCADE');

		$this->forge->createTable('text_note');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('text_note');
	}
}
