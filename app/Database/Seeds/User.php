<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
	public function run()
	{
		$data = [
			'email' => 'aveber@gmail.com',
			'first_name' => 'Andrew',
			'last_name' => 'Veber',
		];

		$this->db->table('user')->insert($data);
	}
}
