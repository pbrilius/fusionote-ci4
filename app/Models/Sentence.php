<?php
namespace App\Models;

use CodeIgniter\Model;

class Sentence extends Model
{
  protected $table = 'sentence';
  protected $useTimestamps = true;

  protected $allowedFields = ['text_note_id', 'order_no', 'sentence'];
}
 ?>
