<?php

namespace App\Models;

use CodeIgniter\Model;
use Codeigniter\Database\BaseBuilder;

class ProfileModel extends Model
{
    protected $table            = 'tb_user';
    protected $primaryKey       = 'email';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $useTimestamps    = false;
    protected $allowedFields    = ['email', 'nama', 'username', 'password'];

    // Dates

    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    //Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getProfile($profileid = false)
    {

        if ($profileid == false) {
            return $this->findAll();
        }

        return $this->where(['email' => $profileid])->first();
    }
}
