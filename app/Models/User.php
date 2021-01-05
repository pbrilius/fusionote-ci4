<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
  protected $allowedFields = ['email','first_name','last_name'];
  protected $useTimestamps = true;
}
