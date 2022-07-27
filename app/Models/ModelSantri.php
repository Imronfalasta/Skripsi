<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSantri extends Model
{
    public function getAllData()
    {
        return $this->db->table('tbl_master')
            ->orderBy('nama_santri', 'ASC')
            ->get()
            ->getResultArray();
    }
    protected $table = 'tbl_master';

    public function getMaster()
    {
        return $this->findAll();
    }
}
