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
        $session = session();
        $userModel = new UserModel();

        $login = $this->request->getPost('login');
        $password = $this->request->getPost('password');

        $user = $userModel->where('login', $login)->first();

        if ($user && password_verify($password, $user['mot_de_passe'])) {
            $session->set([
                'loggedIn' => true,
                'user_id' => $user['matricule_abonne'],
                'login' => $user['login'],
                'nom' => $user['nom_abonne'],
            ]);

            return redirect()->to('/bibliotheque');
        } else {
            return view('login', ['error' => 'Identifiants invalides.']);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
