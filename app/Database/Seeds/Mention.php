<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Mention extends Seeder
{
	public function run()
	{
		$data = [
			'sentence' => $this->db->query('SELECT * FROM ci4_sentence LIMIT 1')->getResultArray()[0]['id'],
			'user_id' => $this->db->query('SELECT * FROM ci4_user LIMIT 1')->getResultObject()[0]->id,
			'offset' => 0,
		];

		$this->db->table('mention')->insert($data);
	}
}
