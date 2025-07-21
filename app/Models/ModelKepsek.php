<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKepsek extends Model
{
    public function totallaporan()
    {
        return $this->db->table('tbl_transaksi')->countAll();
    }
}