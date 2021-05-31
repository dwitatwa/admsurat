<?php

namespace App\Models;

use CodeIgniter\Model;

class NotaModel extends Model
{
  protected $table = 'data_nota';
  protected $allowedFields = ['tgl', 'jenis', 'file_nota', 'jumlah_bayar'];
  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
}
