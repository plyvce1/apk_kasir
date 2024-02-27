<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class Pelanggan extends BaseController
{
    protected $pelangganModel;
    public function __construct()
    {
        $this->pelangganModel = new PelangganModel();
    }

    public function index()
    {
        $tb_pelanggan =  $this->pelangganModel->findAll();

        $data = [
            'tb_pelanggan' => $tb_pelanggan,
        ];

        echo view('templates/header');
        echo view('pelanggan/index', $data);
        echo view('templates/footer');
    }
    public function tambah()
    {

        $data = [
            'validation' => \Config\Services::validation()
        ];

        echo view('templates/header');
        echo view('pelanggan/create', $data);
        echo view('templates/footer');
    }

    public function simpan()
    {
        if (!$this->validate([

            'namaPelanggan' => 'required|is_unique[tb_pelanggan.nama_pelanggan]',
            'Alamat' => 'required',
            'nomorTelepon' => 'required|is_unique[tb_pelanggan.nomor_telepon]'
        ])) {

            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('pelanggan/create')->withInput()->with('validation', $validation);
        }

        $this->pelangganModel->save([
            'nama_pelanggan' => $this->request->getVar('namaPelanggan'),
            'alamat' => $this->request->getVar('Alamat'),
            'nomor_telepon' => $this->request->getVar('nomorTelepon')
        ]);

        session()->setFlashdata('berhasil', 'Data Berhasil Ditambahkan.');

        return redirect('pelanggan');
    }

    public function edit($pelangganid)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'pelanggan' => $this->pelangganModel->getPelanggan($pelangganid)
        ];

        echo view('templates/header');
        echo view('pelanggan/edit', $data);
        echo view('templates/footer');
    }

    public function update($PelangganID)
    {

        // cek Nama

        $dataLama = $this->pelangganModel->getPelanggan($this->request->getVar('dummy'));

        if ($dataLama['nama_pelanggan'] == $this->request->getVar('namaPelanggan')) {
            $ruleNama = 'required';
        } else {
            $ruleNama = 'required|is_unique[tb_pelanggan.nama_pelanggan]';
        } 

        if($dataLama['nomor_telepon'] == $this->request->getVar('noTelepon')){
            $ruleNo = 'required';
        } else {
            $ruleNo = 'required|is_unique[tb_pelanggan.nomor_telepon]';
        }
        // dd($this->request->getVar());

        if (!$this->validate([

            'namaPelanggan' => $ruleNama,
            'Alamat' => 'required',
            'noTelepon' => $ruleNo,

        ])) {

            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('pelanggan/edit/' . $PelangganID)->withInput()->with('validation', $validation);
        }

        $this->pelangganModel->save([
            'PelangganID' => $this->request->getVar('dummy'),
            'nama_pelanggan' => $this->request->getVar('namaPelanggan'),
            'alamat' => $this->request->getVar('Alamat'),
            'nomor_telepon' => $this->request->getVar('noTelepon')
        ]);

        session()->setFlashdata('berhasil', 'Data Berhasil Edit.');

        return redirect('pelanggan');
    }

    public function delete($pelangganid)
    {

        $this->pelangganModel->delete($pelangganid);

        session()->setFlashdata('berhasil', 'Data Berhasil Dihapus.');

        return redirect('pelanggan');
    }
}
