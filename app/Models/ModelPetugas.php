<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPetugas extends Model
{
    public function totalanggota()
    {
        return $this->db->table('tbl_anggota')->countAll();
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
}
