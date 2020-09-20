<?php

namespace App\Models;

use CodeIgniter\Model;

class LampuModel extends Model
{
    protected $table = 'kontrollampu';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'namaprojek', 'token', 'deskripsi', 'jumlahlampu', 'gambar', 'created_by', 'created_date', 'updated_date', 'lampu_1', 'lampu_2', 'lampu_3', 'lampu_4', 'lampu_5', 'lampu_6'
    ];
    protected $returnType = 'App\Entities\Lampu';
    protected $useTimestamps = false;
}
