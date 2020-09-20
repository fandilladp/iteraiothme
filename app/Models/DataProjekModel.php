<?php

namespace App\Models;

use CodeIgniter\Model;

class DataProjekModel extends Model
{
    protected $table = 'data_projek';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'namaprojek', 'token', 'role', 'category', 'deskripsi', 'statusfield1', 'statusfield2', 'statusfield3', 'gambar', 'created_by', 'created_date', 'updated_date', 'datafield_1', 'datafield_2', 'datafield_3'
    ];
    protected $returnType = 'App\Entities\DataProjek';
    protected $useTimestamps = false;

    public function updateData($data, $API)
    {
        return $this->db->table($this->table)->update($data, ['token' => $API]);
    }
}
