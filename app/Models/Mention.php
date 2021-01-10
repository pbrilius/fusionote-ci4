<?php

 namespace App\Models;

 use CodeIgniter\Model;

 class Mention extends Model
 {
   protected $table = 'models';
   protected $useTimestamps = true;
   protected $allowedFields = ['sentence', 'user_id', 'offset'];

 }

 ?>
