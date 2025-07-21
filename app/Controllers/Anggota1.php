<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAnggota;
use App\Models\ModelKelas;
class Anggota1 extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAnggota = new ModelAnggota;
        $this->ModelKelas = new ModelKelas;
    }
    public function index()
    {
        $data = [
            'menu' => 'anggota',
            'submenu' => 'anggota',
            'judul' => 'Anggota',
            'page' => 'v_anggota1',
            'anggota' => $this->ModelAnggota->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
        ];
        return view('v_template_petugas',$data);
    }
    public function Add()
    {
        $data = [
            'nama'=> $this->request->getPost('nama'),
            'jenis_kelamin'=> $this->request->getPost('jenis_kelamin'),
            'kelas'=> $this->request->getPost('kelas'),
            'tgl_lahir'=> $this->request->getPost('tgl_lahir'),
            'no_hp'=> $this->request->getPost('no_hp'),
        ];
            $this->ModelAnggota->Add($data);
            session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
            return redirect()->to(base_url('Anggota1'));
    }
    public function UpdateData($id_anggota)
    {
        $data = [
            'id_anggota'=>$id_anggota,
            'nama'=> $this->request->getPost('nama'),
            'jenis_kelamin'=> $this->request->getPost('jenis_kelamin'),
            'kelas'=> $this->request->getPost('kelas'),
            'tgl_lahir'=> $this->request->getPost('tgl_lahir'),
            'no_hp'=> $this->request->getPost('no_hp'),
        ];
            $this->ModelAnggota->UpdateData($data);
            session()->setFlashdata('pesan','Data Berhasil Diupdate');
            return redirect()->to(base_url('Anggota1'));
    }
    public function DeleteData($id_anggota)
    {
        $data = [
            'id_anggota'=> $id_anggota ];
            $this->ModelAnggota->DeleteData($data);
            session()->setFlashdata('pesan','Data Berhasil Dihapus');
            return redirect()->to(base_url('Anggota1'));
    }
    public function Lapanggota()
    {
        $data = [
            'menu' => 'laporan',
            'submenu' => 'lapanggota',
            'judul' => 'Laporan Anggota',
            'page' => 'v_lapanggota',
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_lapanggota', $data);
    }
}