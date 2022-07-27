<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Contoh;
use APP\Models\ModelSantri;

class Santri extends BaseController
{
    protected $santri;

    public function __contruct()
    {
        $this->santri = new ModelSantri();
    }
    // public function index()
    // {
    //     $data = [
    //         'title' => 'PSB Online',
    //         'subtitle' => 'Santri',
    //         //jika di aktifkan scrip di bawah ini maka akan terjadi errors
    //         'santri' => $this->ModelSantri->findAll(),
    //     ];
    //     return view('admin/v_santri', $data);
    // }
    public function index()
    {

        $models = new Contoh();
        $model = $models->tampil();

        $data = [
            'santri' => $model
        ];

        return view('admin/v_santri', $data);
    }
}
