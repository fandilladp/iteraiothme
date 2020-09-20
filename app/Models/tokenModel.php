<?php

namespace App\Models;

use CodeIgniter\Model;

class tokenModel extends Model
{
    protected $table = 'usertoken';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'email', 'token', 'created_date'
    ];
    protected $useTimestamps = false;
}
