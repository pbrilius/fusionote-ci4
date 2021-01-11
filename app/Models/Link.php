<?php

namespace App\Models;

use CodeIgniter\Model;

class Link extends Model
{
  protected $allowedFields = ['sentence', 'offset', 'preview', 'link'];
  protected $useTimestamps = true;
}
 ?>
