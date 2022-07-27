<?php

namespace App\Models;

use CodeIgniter\Model;

class Contoh extends Model
{

    protected $table            = 'tbl_master';
    protected $primaryKey       = 'id_santri';
    protected $allowedFields    = [
        'id_santri', 'nama_santri', 'alamat', 'tanggal lahir'
    ];

    public function tampil()
    {
        return $this->table('tbl_master')->findAll();
    }
}
