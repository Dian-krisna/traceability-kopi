<?php

namespace App\Models;

use CodeIgniter\Model;

class BahanBakuModel extends Model
{
    protected $table = 'bahan_baku';

    protected $allowedFields = [
        'kode_batch',
        'nama_petani',
        'tanggal_panen',
        'lokasi'
    ];
}