<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function totalanggota()
    {
        return $this->db->table('tbl_anggota')->countAll();
    }
    public function totalbuku()
    {
        return $this->db->table('tbl_buku')->countAll();
    }
    public function totaltransaksi()
    {
        return $this->db->table('tbl_pinjam')->countAll();
    }
    public function totalbukuhilang()
    {
        return $this->db->table('tbl_hilang')->countAll();
    }
    public function totaldenda()
    {
        return $this->db->table('tbl_denda')->countAll();
    }
    public function totallaporan()
    {
        return $this->db->table('tbl_transaksi')->countAll();
    }
    public function totalkelas()
    {
        return $this->db->table('tbl_kelas')->countAll();
    }
    public function totalkategori()
    {
        return $this->db->table('tbl_kategori')->countAll();
    }
    public function totalrak()
    {
        return $this->db->table('tbl_rak')->countAll();
    }
    public function totalpenerbit()
    {
        return $this->db->table('tbl_penerbit')->countAll();
    }
    public function totalpenulis()
    {
        return $this->db->table('tbl_penulis')->countAll();
    }
    public function totaluser()
    {
        return $this->db->table('tbl_user')->countAll();
    }
}
