<?php

namespace App\Controllers;
use App\Models\ModelPetugas;


class Petugas extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPetugas = new ModelPetugas;
    }
    public function index()
    {
        $data = [
            'menu' => 'dashboard',
            'submenu' => ' ',
            'judul' => 'Dashboard',
            'page' => 'v_petugas',
            'totalanggota' => $this->ModelPetugas->totalanggota(),
            'totalpeminjaman1' => $this->ModelPetugas->totaltransaksi(),
            'totalhilang' => $this->ModelPetugas->totalbukuhilang(),
            'totaldenda' => $this->ModelPetugas->totaldenda(),
            'totallaporan' => $this->ModelPetugas->totallaporan(),
        ];
        return view('v_template_petugas',$data);
    }
}