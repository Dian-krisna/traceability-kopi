<?php

namespace App\Controllers;

class Tracking extends BaseController
{
    public function index($id)
    {
        $db = \Config\Database::connect();

        $data['tracking'] = $db->table('produksi')
            ->join('bahan_baku', 'bahan_baku.id = produksi.bahan_baku_id')
            ->join('distribusi', 'distribusi.produksi_id = produksi.id')
            ->where('produksi.id', $id)
            ->select('
                bahan_baku.kode_batch,
                bahan_baku.nama_petani,
                bahan_baku.tanggal_panen,
                bahan_baku.lokasi,
                produksi.tingkat_sangrai,
                produksi.tanggal_produksi,
                distribusi.nama_toko,
                distribusi.tanggal_kirim
            ')
            ->get()
            ->getRowArray();

        return view('tracking', $data);
    }
}