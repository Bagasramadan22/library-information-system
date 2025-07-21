<?php

namespace App\Controllers;

use App\Models\ModelAuth;
use App\Models\ModelKelas;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth;
        $this->ModelKelas = new ModelKelas;
    }
    public function index()
    {
        $data = [
            // 'judul' => 'Login',
            // 'page' => 'v_login',
            'judul' => 'Login Admin',
            'page' => 'v_login_admin',
        ];
        return view('v_template_login', $data);
    }

    public function LoginAdmin()
    {
        $data = [
            'judul' => 'Login',
            'page' => 'v_login_admin',
        ];
        return view('v_template_login', $data);
    }
    // public function CekLoginAdmin()
    // {
    //     if ($this->validate([
    //         'email' => [
    //             'label' => 'E-mail',
    //             'rules' => 'required|valid_email',
    //             'errors' => [
    //                 'required' => '{field} wajib diisi!',
    //                 'valid_email' => '{field} harus format e-mail!',
    //             ]
    //         ],
    //         'password' => [
    //             'label' => 'Password',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} wajib diisi!',

    //             ]
    //         ]
    //     ])) {
    //         //jika entry valid
    //         $email = $this->request->getPost('email');
    //         $password = $this->request->getPost('password');
    //         $cek_login = $this->ModelAuth->LoginAdmin($email, $password);
    //         if ($cek_login) {
    //             //jika logi berhasil
    //             session()->set('nama_user', $cek_login['nama_user']);
    //             session()->set('email', $cek_login['email']);
    //             session()->set('level', $cek_login['level']);
    //             return redirect()->to(base_url('Admin'));
    //         } else {
    //             //jika gagal login karena email atau password salah
    //             session()->setFlashdata('pesan', 'Email atau Password Salah');
    //             return redirect()->to(base_url('Auth/LoginAdmin'));
    //         }
    //     } else {
    //         //jika entry tidak valid
    //         session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
    //         return redirect()->to(base_url('Auth/LoginAdmin'));
    //     }
    // }

    public function CekLoginAdmin()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} wajib diisi!',
                    'valid_email' => '{field} harus format e-mail!',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!',

                ]
            ]
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->LoginAdmin($email, $password);

            if ($cek_login) {
                //jika datanya cocok
                $level = $cek_login['level'];
                if ($level === "1") {
                    session()->set('nama_user', $cek_login['nama_user']);
                    session()->set('email', $cek_login['email']);
                    session()->set('level', $cek_login['level']);

                    //login
                    return redirect()->to(base_url('Admin'));
                } elseif ($level === "2") {
                    session()->set('nama_user', $cek_login['nama_user']);
                    session()->set('email', $cek_login['email']);
                    session()->set('level', $cek_login['level']);
                    //login
                    return redirect()->to(base_url('Petugas/index'));
                 } elseif ($level === "3") {
                    session()->set('nama_user', $cek_login['nama_user']);
                    session()->set('email', $cek_login['email']);
                    session()->set('level', $cek_login['level']);
                    //login
                    return redirect()->to(base_url('Kepsek/index'));
                }
            } else {
                //jika gagal login karena email atau password salah
                session()->setFlashdata('pesan', 'Email atau Password Salah');
                return redirect()->to(base_url('Auth/LoginAdmin'));
            }
        } else {
            //jika entry tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/LoginAdmin'));
        }
    }
    public function LogOut()
    {
        session()->remove('nama_user');
        session()->remove('email');
        session()->remove('level');
        // session()->setFlashdata('pesan', 'Logout Berhasil');
        return redirect()->to(base_url('Home'));
    }
}