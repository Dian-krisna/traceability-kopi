<?php

namespace App\Controllers;

use App\Models\DistribusiModel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\SvgWriter;

class Distribusi extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $data['distribusi'] = $db->table('distribusi')
            ->join('produksi', 'produksi.id = distribusi.produksi_id')
            ->join('bahan_baku', 'bahan_baku.id = produksi.bahan_baku_id')
            ->select('distribusi.*, bahan_baku.kode_batch')
            ->get()
            ->getResultArray();

        return view('distribusi/index', $data);
    }

    public function create()
    {
        $db = \Config\Database::connect();

        $data['produksi'] = $db->table('produksi')
            ->join('bahan_baku', 'bahan_baku.id = produksi.bahan_baku_id')
            ->select('produksi.*, bahan_baku.kode_batch')
            ->get()
            ->getResultArray();

        return view('distribusi/create', $data);
    }

    public function store()
    {
        $model = new DistribusiModel();

        $produksi_id = $this->request->getPost('produksi_id');

     $tracking_url = base_url('/tracking/' . $produksi_id);

$qr = new QrCode($tracking_url);

$writer = new SvgWriter();

$result = $writer->write($qr);

$filename = 'qr_' . time() . '.svg';

$result->saveToFile(FCPATH . 'qrcode/' . $filename);

        $model->save([
            'produksi_id'   => $produksi_id,
            'nama_toko'     => $this->request->getPost('nama_toko'),
            'tanggal_kirim' => $this->request->getPost('tanggal_kirim'),
            'qr_code'       => $filename
        ]);

        return redirect()->to('/distribusi');
    }

    public function delete($id)
    {
        $model = new DistribusiModel();

        $model->delete($id);

        return redirect()->to('/distribusi');
    }
    public function __construct()
{
    if(session()->get('role') != 'toko'){

        echo "Access Denied";
        exit;
    }
}
}