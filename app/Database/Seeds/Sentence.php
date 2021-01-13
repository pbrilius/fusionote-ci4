<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Sentence extends Seeder
{
	public function run()
	{
		$data = [
			'text_note_id' => $this->db->query('SELECT * FROM ci4_text_note LIMIT 1')->getResultObject()[0]->id,
			'order_no' => 1,
			'sentence' => $this->db->query('SELECT * FROM ci4_text_note LIMIT 1')->getResultObject()[0]->text,
		];

		$this->db->table('sentence')->insert($data);
	}
}
