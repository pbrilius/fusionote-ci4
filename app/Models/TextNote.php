<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\TextNote;

class TextNote extends Model
{
  protected $allowedFields = ['label', 'text', 'user_id'];
  protected $useTimestamps = true;

  protected $returnType = TextNote::class;
}
