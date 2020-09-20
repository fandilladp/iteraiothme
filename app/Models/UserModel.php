<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'email', 'avatar', 'password', 'salt', 'role', 'aktif', 'created_date', 'updated_date'
    ];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamps = false;
}
