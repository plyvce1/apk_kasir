<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
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
        echo view('produk/index', $data);
        echo view('templates/footer');
    }

    public function tambah()
    {

        session();
        $data = [

            'validation' => \Config\Services::validation()
        ];

        echo view('templates/header');
        echo view('produk/create', $data);
        echo view('templates/footer');
    }

    public function simpan()
    {
        $validation = \Config\Services::validation();
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'namaProduk' => [
                    'rules' => 'required|is_unique[tb_produk.nama_produk]',
                    'errors' => [
                        'required' => 'Nama produk harus diisi.',
                        'is_unique' => 'Produk telah terdaftar'
                    ]
                ],
                'hargaBeli' => [
                    'rules' => 'required|is_natural_no_zero',
                    'errors' => [
                        'required' => 'Harga beli produk harus diisi.',
                        'is_natural_no_zero' => 'Kolom ini hanya diisi oleh angka'
                    ]
                ],
                'hargaJual' => [
                    'rules' => 'required|is_natural_no_zero',
                    'errors' => [
                        'required' => 'Harga jual produk harus diisi.',
                        'is_natural_no_zero' => 'Kolom ini hanya diisi oleh angka'
                    ]
                ],
                'stok' => [
                    'rules' =>  'required|is_natural_no_zero',
                    'errors' => [
                        'required' => 'Stok produk harus diisi.',
                        'is_natural_no_zero' => 'Kolom ini hanya diisi oleh angka'
                    ]
                ],

            ];
            if (!$this->validate($rules)) {
                session()->setFlashdata('errors', $validation->getErrors());
                return redirect()->to('produk/create')->withInput()->with('errors', $validation->getErrors());
            }
        }

        $this->produkModel->save([
            'nama_produk' => $this->request->getVar('namaProduk'),
            'harga_beli' => $this->request->getVar('hargaBeli'),
            'harga_jual' => $this->request->getVar('hargaJual'),
            'stock' => $this->request->getVar('stok'),
        ]);

        session()->setFlashdata('berhasil', 'Data Berhasil Ditambahkan.');

        return redirect('produk');
    }

    public function edit($produkid)
    {
        $tb_produk = $this->produkModel->getProduk($produkid);

        if ($tb_produk) {
            $tb_produk['harga_beli'] = floor(floatval($tb_produk['harga_beli']));
            $tb_produk['harga_jual'] = floor(floatval($tb_produk['harga_jual']));
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'produk' => $this->produkModel->getProduk($produkid),
            'produk' => $tb_produk
        ];

        echo view('templates/header');
        echo view('produk/edit', $data);
        echo view('templates/footer');
    }

    public function update($ProdukID)
    {
        
        $validation = \Config\Services::validation();

        $produkLama = $this->produkModel->find($ProdukID);
        $namaProduk = $this->request->getVar('namaProduk');
        $HargaBeli = $this->request->getPost('hargaBeli');
        // cek Nama

        //  $produkLama = $this->produkModel->getProduk($this->request->getVar('dummy'));
            $ruleNama = $produkLama['nama_produk'] == $namaProduk ? 'required' : "required|is_unique[tb_produk.nama_produk.ProdukID,{$ProdukID}]";
        //  if ($produkLama['nama_produk'] == $this->request->getVar('namaProduk')) {
            //    $ruleNama = 'required';
            //} else {
            //   $ruleNama = 'required|is_unique[tb_produk.nama_produk]';
        
        // dd($this->request->getVar());
         $validation->setRules([
            'namaProduk' => [
                'rules' => $ruleNama,
                'errors' => [
                    'required' => 'Nama Produk harus diisi.',
                    'is_unique' => 'Produk sudah tersedia.'
            ]
                ],
                'hargaBeli' => [
                    'rules' => 'required|is_natural_no_zero|min_length[3]',
                    'errors' => [
                        'required' => 'Harga beli harus diisi.',
                        'is_natural_no_zero' => 'Kolom ini hanya boleh diisi oleh angka.',
                        'min_length' => 'Angka harus lebih dari 2'
                ]
                    ], 
                'hargaJual' => [
                    'rules' => "required|is_natural_no_zero|greater_than_equal_to[$HargaBeli]",
                    'errors' => [
                        'required' => 'Harga jual harus diisi.',
                        'is_natural_no_zero' => 'Kolom ini hanya boleh diisi oleh angka.',
                        'greater_than_equal_to' => 'Harga jual harus lebih tinggi dari harga beli.'
                ]
                    ], 
                    'stok' => [
                        'rules' => 'required|is_natural_no_zero',
                        'errors' => [
                            'required' => 'Stok harus diisi.',
                            'is_natural_no_zero' => 'Kolom ini hanya boleh diisi angka dan lebih dari 0.'                   
                    ]
                        ], 
                    ]);  
                    if ($validation->withRequest($this->request)->run()){
                        }  else {
                            return redirect()->to('produk/');
                        }

        $this->produkModel->save([
            'ProdukID' => $this->request->getVar('dummy'),
            'nama_produk' => $this->request->getVar('namaProduk'),
            'harga_beli' => $this->request->getVar('hargaBeli'),
            'harga_jual' => $this->request->getVar('hargaJual'),
            'stock' => $this->request->getVar('stok')
        ]);

        session()->setFlashdata('berhasil', 'Data Berhasil Edit.');

        return redirect('produk');
    }

    public function delete($produkid)
    {

        $this->produkModel->delete($produkid);

        session()->setFlashdata('berhasil', 'Data Berhasil Dihapus.');

        return redirect('produk');
    }
    public function detail($produkid)
    {
        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->produkModel->getProduk($produkid)
        ];
        return view('produk/detail', $data);
    }
}
