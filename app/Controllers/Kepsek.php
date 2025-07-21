<?php
namespace App\Controllers;
use App\Models\ModelKepsek;


class Kepsek extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelKepsek = new ModelKepsek;
    }
    public function index()
    {
        $data = [
            'menu' => 'dashboard',
            'submenu' => ' ',
            'judul' => 'Dashboard',
            'page' => 'v_kepsek',
            'totallaporan' => $this->ModelKepsek->totallaporan(),
        ];
        return view('v_template_kepsek',$data);
    }
}