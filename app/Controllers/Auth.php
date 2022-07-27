<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;
use Config\Email;

class Auth extends BaseController
{
    public function __contruck()
    {
        $this->ModelAuth = new ModelAuth();
        helper('form');
    }

    public function index()
    {
    }

    public function login()
    {
        echo view('v_login_admin');
    }

    public function cek_login_admin()
    {
        if ($this->validate([
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib DIisi !!',
                    'email' => 'Harus format Email !!!'
                ]
            ],
            'password' => [
                'label' => 'password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib DIisi !!',
                ]

            ]
        ])) {

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek_login = $this->request->getPost($email, $password);
            if ($cek_login) {
                session()->set('nama_user', $cek_login['nama_user']);
                session()->set('email', $cek_login['email']);
                session()->set('foto', $cek_login['foto']);
                session()->set('level', 'admin');
                return redirect()->to('admin');
            } else {
                session()->setFlashdata('pesan', 'Email atau Password salah !!!');
                return redirect()->to('auth/login');
            }
        } else {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to('auth/login');
        }
    }

    public function logout()
    {
        session()->remove('nama_user');
        session()->remove('email');
        session()->remove('foto');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Loguot Success');
        return redirect()->to('auth/login');
    }
}
