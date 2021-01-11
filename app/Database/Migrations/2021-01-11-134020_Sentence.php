<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sentence extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => '5',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'text_note_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
			'order_no' => [
				'type' => 'INT',
				'constraint' => 3,
			],
			'sentence' => [
				'type' => 'TEXT',
				'null' => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('text_note_id', 'text_note', 'id', 'RESTRICT', 'CASCADE');
		$this->forge->createTable('sentence');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable(
			'sentence'
		);
	}
}
