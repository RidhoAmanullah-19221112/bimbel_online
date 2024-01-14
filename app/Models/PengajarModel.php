<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajarModel extends Model
{
    protected $table            = 'tb_pengajar';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email', 'username', 'namapengajar', 'jenis_kelamin', 'katasandi'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function create() {
        // Get POST data
        $email = $_POST['email'];
        $username = $_POST['username'];
        $namapengajar = $_POST['namapengajar'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $katasandi = $_POST['katasandi'];

        // Create a new instance of your model
        $data = new PengajarModel();
        
        // Call the create method on the model
        if($data->create1($email, $username, $namapengajar, $jenis_kelamin, $katasandi)) {
            // Redirect or show a success message
        } else {
            // Handle the error
        }
    }

}
    

