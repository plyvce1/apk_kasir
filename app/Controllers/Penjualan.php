<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\PelangganModel;
use App\Models\PenjualanModel;
use App\Models\TransaksiModel;

class Penjualan extends BaseController
{
    protected $produkModel;
    protected $pelangganModel;
    protected $transaksiModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->pelangganModel = new PelangganModel();
       // $this->transaksiModel = new TransaksiModel();
        $this->penjualanModel = new PenjualanModel();
    }

    public function index()
    {
        $tb_produk =  $this->produkModel->findAll();
        $tb_pelanggan =  $this->pelangganModel->findAll();
        // $tb_detailpenjualan =  $this->transaksiModel->findAll();
       

        $model = new PenjualanModel();

        $data = [
            'tb_produk' => $tb_produk,
            'tb_pelanggan' => $tb_pelanggan,
            'tb_penjualan' => $model->getPenjualanDetail(),
        ];

        $totalharga = array_sum(array_column($data['tb_penjualan'], 'subtotal'));
        // $data['total_harga'] = $totalHarga;

        echo view('templates/header');
        echo view('Penjualan/index', $data);
        echo view('templates/footer');
    }
    public function tambah()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
    }
}