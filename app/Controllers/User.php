<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        if ($this->session->get('isLoggedIn')) {
            $dataprojek = new \App\Models\DataProjekModel();
            $userModel = new \App\Models\UserModel();

            $username = $this->session = session('username');
            $myuser = $userModel->where('username', $username)->first();
            $myprojek = $dataprojek->where('created_by', $username)->findAll();


            return view('user/index', [
                'myprojek' => $myprojek,
                'myuser' => $myuser,
            ]);
        }
        return redirect()->to(site_url('auth/login'));
    }

    //--------------------------------------------------------------------

}
