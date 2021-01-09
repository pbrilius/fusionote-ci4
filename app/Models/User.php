<?php

namespace App\Models;

use App\Entity\User as EntityUser;
use CodeIgniter\Model;

class User extends Model
{
  protected $allowedFields = ['email','first_name','last_name'];
  protected $useTimestamps = true;

  protected $returnType = EntityUser::class;
}
