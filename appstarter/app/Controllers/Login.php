<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function attemptlogin()
    {
        $usermodel = new UserModel();

        $userfetched = $usermodel->where('login', $this->request->getPost('username'))->first();

        if ($userfetched && $this->request->getPost('password') === $userfetched['mot_de_passe']) {
            if (isset($userfetched['login']) && $userfetched['mot_de_passe'] === 'admin') {
                return redirect()->to('/admin');
            } else {
                return redirect()->to('/bibliotheque');
            }

        } 
        return redirect()->to('/Login');
    }
}