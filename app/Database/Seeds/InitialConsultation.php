<?php namespace App\Database\Seeds;

use App\Database\Seeds\Link;
use App\Database\Seeds\User;
use App\Database\Seeds\Hashtag;
use App\Database\Seeds\Mention;
use App\Database\Seeds\Sentence;
use App\Database\Seeds\TextNote;
use CodeIgniter\Database\Seeder;

class InitialConsultation extends Seeder
{
	public function run()
	{
		$this->call(User::class);
		$this->call(TextNote::class);
		$this->call(Sentence::class);
		$this->call(Link::class);
		$this->call(Hashtag::class);
		$this->call(Mention::class);
	}
}
