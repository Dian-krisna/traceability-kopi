<?php

namespace App\Controllers;

use App\Models\ProduksiModel;
use App\Models\BahanBakuModel;

class Produksi extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $data['produksi'] = $db->table('produksi')
            ->join('bahan_baku', 'bahan_baku.id = produksi.bahan_baku_id')
            ->select('produksi.*, bahan_baku.kode_batch, bahan_baku.nama_petani')
            ->get()
            ->getResultArray();

        return view('produksi/index', $data);
    }

    public function create()
    {
        $bahanModel = new BahanBakuModel();

        $data['bahan'] = $bahanModel->findAll();

        return view('produksi/create', $data);
    }

    public function store()
    {
        $model = new ProduksiModel();

        $model->save([
            'bahan_baku_id'   => $this->request->getPost('bahan_baku_id'),
            'tingkat_sangrai' => $this->request->getPost('tingkat_sangrai'),
            'tanggal_produksi'=> $this->request->getPost('tanggal_produksi'),
        ]);

        return redirect()->to('/produksi');
    }

    public function delete($id)
    {
        $model = new ProduksiModel();

        $model->delete($id);

        return redirect()->to('/produksi');
    }
    public function __construct()
{
    if(session()->get('role') != 'roaster'){

        echo "Access Denied";
        exit;
    }
}
}