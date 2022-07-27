<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function login_admin($email, $password)
    {
        return $this->db->table('tbl-user')->where(
            [
                'email' => $email,
                'password' => $password
            ]
        )->get()->getRowArray();
    }
}
