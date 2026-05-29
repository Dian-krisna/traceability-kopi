<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $data['total_bahan'] = $db->table('bahan_baku')->countAll();

        $data['total_produksi'] = $db->table('produksi')->countAll();

        $data['total_distribusi'] = $db->table('distribusi')->countAll();

        return view('dashboard', $data);
    }
}