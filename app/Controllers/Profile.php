<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Profile extends BaseController
{
    protected $profileModel;
    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }

    public function index()
    {
        $tb_user =  $this->profileModel->findAll();

        $data = [
            'tb_user' => $tb_user,
        ];

        echo view('templates/header');
        echo view('profile/index', $data);
        echo view('templates/footer');
    }
}
