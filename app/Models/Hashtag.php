<?php

namespace App\Models;

use CodeIgniter\Model;

class Hashtag extends Model
{
  protected $table = 'hashtags';
  protected $useTimestamps = true;
  protected $allowedFields = ['sentence', 'label', 'offset'];
}

 ?>
