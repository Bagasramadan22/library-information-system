<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPeminjaman;
use App\Models\ModelKelas;
use App\Models\ModelBuku;
use App\Models\ModelAnggota;

class Peminjaman extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPeminjaman = new ModelPeminjaman;
        $this->ModelKelas = new ModelKelas;
        $this->ModelBuku = new ModelBuku;
        $this->ModelAnggota = new ModelAnggota();
    }
    public function index()
    {
        $data = [
            'menu' => 'transaksi',
            'submenu' => 'peminjaman1',
            'judul' => 'Peminjaman Buku',
            'page' => 'v_peminjaman',
            'peminjaman' => $this->ModelPeminjaman->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'buku' => $this->ModelBuku->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_template_admin', $data);
    }
    public function Pengembalian()
    {
        $data = [
            'menu' => 'transaksi',
            'submenu' => 'peminjaman2',
            'judul' => 'Pengembalian Buku',
            'page' => 'v_transaksi',
            'peminjaman' => $this->ModelPeminjaman->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'buku' => $this->ModelBuku->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_template_admin', $data);
    }
    public function Pengembalian1()
    {
        $data = [
            'menu' => 'transaksi',
            'submenu' => 'peminjaman2',
            'judul' => 'Pengembalian Buku',
            'page' => 'v_transaksi1',
            'peminjaman' => $this->ModelPeminjaman->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'buku' => $this->ModelBuku->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_template_petugas', $data);
    }

    public function Add()
    {
        
        $data = [
            'tgl_pinjam' => date('Y-m-d'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_kelas' => $this->request->getPost('id_kelas'),
            'id_buku' => $this->request->getPost('id_buku'),
            'no' => $this->request->getPost('no'),
            'jumlah' => '1',
            'status' => 'Pinjam',
            'tgl_harus_kembali' => $this->request->getPost('tgl_harus_kembali'),
        ];
        $this->ModelPeminjaman->Add($data);
        session()->setFlashdata('pesan', 'Peminjaman Berhasil di Tambahkan');
        return redirect()->to(base_url('Peminjaman'));
    }

    // public function Add()
    // {
       
    //     // Menyiapkan data untuk disimpan
    //     $data = [
    //         'tgl_pinjam' => date('d F Y'),
    //         'id_anggota' => $this->request->getPost('id_anggota'),
    //         'id_kelas' => $this->request->getPost('id_kelas'),
    //         'id_buku' => $this->request->getPost('id_buku'),
    //         'no' => $this->request->getPost('no'),
    //         'jumlah' => '1',
    //         'status' => 'Pinjam',
    //         'tgl_harus_kembali' => $tgl_harus_kembali,
    //     ];

    //     // Menambahkan data ke model
    //     $this->ModelPeminjaman->Add($data);

    //     // Menyiapkan pesan dan melakukan redirect
    //     session()->setFlashdata('pesan', 'Peminjaman Berhasil di Tambahkan');
    //     return redirect()->to(base_url('Peminjaman1'));
    // }

    public function Edit($id_pinjam)
    {
        // $bukudipinjam = $this->request->getPost('id_buku');
        $data = [
            'id_pinjam' => $id_pinjam,
            'tgl_pinjam' => $this->request->getPost('tgl_pinjam'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_kelas' => $this->request->getPost('id_kelas'),
            'id_buku' => $this->request->getPost('id_buku'),
            'no' => $this->request->getPost('no'),
        ];

        $this->ModelPeminjaman->UpdateData($data);
        session()->setFlashdata('pesan', 'Transaksi Berhasil Diupdate');
        return redirect()->to(base_url('Peminjaman'));
    }
    public function Update($id_pinjam)
    {
        $data = [
            'menu' => 'transaksi',
            'submenu' => 'peminjaman1',
            'judul' => 'Edit Peminjaman',
            'page' => 'v_peminjaman_edit',
            'peminjaman' => $this->ModelPeminjaman->DetailData($id_pinjam),
            'kelas' => $this->ModelKelas->AllData(),
            'buku' => $this->ModelBuku->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_template_petugas', $data);
    }
    public function DeleteData($id_pinjam)
    {
        $data = [
            'id_pinjam' => $id_pinjam
        ];
        $this->ModelPeminjaman->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('Peminjaman'));
    }

    public function DeleteData1($id_pinjam)
    {
        $data = [
            'id_pinjam' => $id_pinjam
        ];
        $this->ModelPeminjaman->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('Peminjaman/Pengembalian'));
    }

    // public function VerifikasiPengembalian($id_pinjam)
    // {
    //     $data = [
    //         'id_pinjam' => $id_pinjam,
    //         'tgl_kembali' =>date('Y-m-d'),
    //         'status' => 'Kembali',
    //     ];
    //     $this->ModelPeminjaman->UpdateData($data);
    //     session()->setFlashdata('pesan', 'Buku Dikembalikan');
    //     return redirect()->to(base_url('Peminjaman1/Pengembalian'));
    // }

    public function VerifikasiPengembalian($id_pinjam)
    {
        // Mendapatkan data peminjaman berdasarkan id_pinjam
        $peminjaman = $this->ModelPeminjaman->GetPeminjamanById($id_pinjam);
        $tgl_harus_kembali = strtotime($peminjaman['tgl_harus_kembali']);
        $tgl_kembali = strtotime(date('Y-m-d'));
    
        // Menentukan status pengembalian
        if ($tgl_kembali > $tgl_harus_kembali) {
            $status_kembali = 'Terlambat';
        } else {
            $status_kembali = 'Tidak Terlambat';
        }
    
        // Menyiapkan data untuk pembaruan
        $data = [
            'id_pinjam' => $id_pinjam,
            'tgl_kembali' => date('Y-m-d'),
            'status' => 'Kembali',
            'status_kembali' => $status_kembali
        ];
    
        // Memperbarui data peminjaman di model
        $this->ModelPeminjaman->UpdateData($data);
    
        // Menyiapkan pesan dan melakukan redirect
        session()->setFlashdata('pesan', 'Buku Dikembalikan');
        return redirect()->to(base_url('Peminjaman/Pengembalian'));
    }
    public function Laporantrans()
    {
        $data = [
            'menu' => 'laporan',
            'submenu' => 'laporantrans',
            'judul' => 'Laporan',
            'page' => 'v_laporantrans',
            'peminjaman' => $this->ModelPeminjaman->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_template_admin', $data);
    }
    public function Laporantrans1()
    {
        $data = [
            'menu' => 'laporan',
            'submenu' => 'laporantrans',
            'judul' => 'Laporan',
            'page' => 'v_laporantrans1',
            'peminjaman' => $this->ModelPeminjaman->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_template_petugas', $data);
    }
     public function Laporantrans2()
    {
        $data = [
            'menu' => 'laporan',
            'submenu' => 'laporantrans',
            'judul' => 'Laporan',
            'page' => 'v_laporantrans2',
            'peminjaman' => $this->ModelPeminjaman->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('v_template_kepsek', $data);
    }
    public function cetak()
    {
        $data = [
            'peminjaman' => $this->ModelPeminjaman->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'buku' => $this->ModelBuku->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('cetak_view', $data);
    }

    public function cetak1()
    {
        $data = [
            'peminjaman' => $this->ModelPeminjaman->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'buku' => $this->ModelBuku->AllData(),
            'anggota' => $this->ModelAnggota->AllData(),
        ];
        return view('cetak_view1', $data);
    }
}