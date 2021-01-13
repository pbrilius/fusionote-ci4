<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TextNote extends Seeder
{
	public function run()
	{
		$data = [
			'label' => 'Text Note 1',
			'text' => 'Lorem ipsum ...',
			'user_id' => $this->db->query('SELECT id FROM ci4_user LIMIT 1')->getResultArray()[0]['id'],
		];

		$this->db->query('INSERT INTO ci4_text_note (label, text, user_id) VALUES(:label:, :text:, :user_id:)', $data);
		$this->db->table('text_note')->insert($data);
	}
}
