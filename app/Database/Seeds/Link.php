<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Link extends Seeder
{
	public function run()
	{
		$data = [
			'sentence' => $this->db->query('SELECT * FROM ci4_sentence LIMIT 1')->getResultArray()[0]['id'],
			'offset' => 0,
			'preview' => null,
			'link' => 'Lorem',
		];

		$this->db->table('link')->insert($data);
	}
}
