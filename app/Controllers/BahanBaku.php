<?php

namespace App\Controllers;

use App\Models\BahanBakuModel;

class BahanBaku extends BaseController
{
    public function index()
    {
        $model = new BahanBakuModel();

        $data['bahan'] = $model->findAll();

        return view('bahan_baku/index', $data);
    }

    public function create()
    {
        return view('bahan_baku/create');
    }

    public function store()
    {
        $model = new BahanBakuModel();

        $model->save([
            'kode_batch'    => $this->request->getPost('kode_batch'),
            'nama_petani'   => $this->request->getPost('nama_petani'),
            'tanggal_panen' => $this->request->getPost('tanggal_panen'),
            'lokasi'        => $this->request->getPost('lokasi'),
        ]);

        return redirect()->to('/bahan-baku');
    }

    public function delete($id)
    {
        $model = new BahanBakuModel();

        $model->delete($id);

        return redirect()->to('/bahan-baku');
    }
    public function __construct()
{
    if(session()->get('role') != 'petani'){

        echo "Access Denied";
        exit;
    }
}
}