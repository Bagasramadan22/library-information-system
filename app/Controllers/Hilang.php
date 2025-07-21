<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelHilang;
use App\Models\ModelBuku;
use App\Models\ModelKelas;
use App\Models\ModelAnggota;

class Hilang extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelHilang = new ModelHilang;
        $this->ModelBuku = new ModelBuku;
        $this->ModelKelas = new ModelKelas;
        $this->ModelAnggota = new ModelAnggota();
    }
    public function index()
    {
        $data = [
            'menu' => 'transaksi',
            'submenu' => 'buku hilang',
            'judul' => 'Buku Hilang',
            'page' => 'v_buku_hilang',
            'hilang' => $this->ModelHilang->AllData(),
            'buku' => $this->ModelBuku->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_template_admin',$data);
    }
    public function index1()
    {
        $data = [
            'menu' => 'transaksi',
            'submenu' => 'buku hilang',
            'judul' => 'Buku Hilang',
            'page' => 'v_buku_hilang1',
            'hilang' => $this->ModelHilang->AllData(),
            'buku' => $this->ModelBuku->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_template_petugas',$data);
    }
    public function Add()
    {
        $data = [
            // 'tgl_hilang'=> $this->request->getPost('tgl_hilang'),
            'id_buku'=> $this->request->getPost('id_buku'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'no_buku'=> $this->request->getPost('no_buku'),
            'nama'=> $this->request->getPost('nama'),
            'jumlah' => '1',
            'id_kelas'=> $this->request->getPost('id_kelas'),
        ];
            $this->ModelHilang->Add($data);
            session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
            return redirect()->to(base_url('Hilang'));
    }
    public function UpdateData($id_hilang)
    {
        $data = [
            'id_hilang'=>$id_hilang,
            // 'tgl_hilang'=> $this->request->getPost('tgl_hilang'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_buku'=> $this->request->getPost('id_buku'),
            'no_buku'=> $this->request->getPost('no_buku'),
            'nama'=> $this->request->getPost('nama'),
            'jumlah' => '1',
            'id_kelas'=> $this->request->getPost('id_kelas'),
        ];
            $this->ModelHilang->UpdateData($data);
            session()->setFlashdata('pesan','Data Berhasil Diupdate');
            return redirect()->to(base_url('Hilang'));
    }
    public function DeleteData($id_hilang)
    {
        $data = [
            'id_hilang'=> $id_hilang,
            'jumlah' => '1', ];
            $this->ModelHilang->DeleteData($data);
            session()->setFlashdata('pesan','Data Berhasil Dihapus');
            return redirect()->to(base_url('Hilang'));
    }
    public function Laporanhil()
    {
        $data = [
            'menu' => 'laporan',
            'submenu' => 'laporanhil',
            'judul' => 'Laporan Buku Hilang',
            'page' => 'v_laporanhil',
            'hilang' => $this->ModelHilang->AllData(),
            'buku' => $this->ModelBuku->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_laporanhil', $data);
    }
}
