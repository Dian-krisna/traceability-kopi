<?php

namespace App\Models;

use CodeIgniter\Model;

class DistribusiModel extends Model
{
    protected $table = 'distribusi';

    protected $allowedFields = [
        'produksi_id',
        'nama_toko',
        'tanggal_kirim',
        'qr_code'
    ];
}