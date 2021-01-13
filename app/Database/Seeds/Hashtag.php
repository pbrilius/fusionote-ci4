<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Hashtag extends Seeder
{
	public function run()
	{
		$data = [
			'sentence' => $this->db->query('SELECT * FROM ci4_sentence LIMIT 1')->getResultObject()[0]->id,
			'label' => 'hashtag 1',
			'offset' => 6,
		];

		$this->db->table('hashtag')->insert($data);
	}
}
