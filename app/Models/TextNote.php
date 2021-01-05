<?php

namespace App\Models;

use CodeIgniter\Model;

class TextNote extends Model
{
  protected $allowedFields = ['label', 'text', 'user_id'];
  protected $useTimestamps = true;
}
