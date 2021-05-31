<?php namespace App\Models;

use CodeIgniter\Model;

class KeluarModel extends Model
{
    protected $table = 'surat_keluar';
    protected $allowedFields = ['no_surat', 'tgl_surat','penerima','perihal'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}