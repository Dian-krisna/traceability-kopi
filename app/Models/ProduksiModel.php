<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduksiModel extends Model
{
    protected $table = 'produksi';

    protected $allowedFields = [
        'bahan_baku_id',
        'tingkat_sangrai',
        'tanggal_produksi'
    ];
}