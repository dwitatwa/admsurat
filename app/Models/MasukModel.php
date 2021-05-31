<?php namespace App\Models;

use CodeIgniter\Model;

class MasukModel extends Model
{
    protected $table = 'surat_masuk';
    protected $allowedFields = ['no_surat', 'tgl_surat','pengirim','perihal'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}