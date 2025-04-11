<?php

namespace App\Controllers;
class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function attemptLogin()
    {
        $userModel = new \App\Models\UserModel();

        $userFetched = $userModel ->where('matricule_abonne', $this->request->getPost('mlogin'))->first();

        if($this->request->getpost('password') == $userFetched['nom_abonne']) {
            return "Login OK";
        } else {
            return "Login failed";
        }

    
        $array = array('loggedIn' => true);
        $this->session->set($array);
        return redirect('home')
    }

}