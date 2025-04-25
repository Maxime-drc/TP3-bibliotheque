<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function attemptLogin()
    {
        $userModel = new \App\Models\UserModel();
        $userFetched = $userModel ->where('matricule_abonne', $this->request->getPost('login'))->first();
    if ($userFetched && $this->request->getPost('password') === $userFetched['CSP_abonne']) {
        return "Login OK";
    } else {
        return "Login KO";
    }
    }
}