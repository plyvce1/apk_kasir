<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Beranda extends BaseController
{

    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        $tb_produk =  $this->produkModel->findAll();

        $data = [
            'tb_produk' => $tb_produk,
        ];

        echo view('templates/header');
        echo view('menuUtama', $data);
        echo view('templates/footer');
    }
}
