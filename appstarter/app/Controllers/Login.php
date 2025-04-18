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

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'loggedIn' => true,
                'user_id' => $user['id'],
                'login' => $user['login'],
                'role' => $user['role'],
                'nom' => $user['nom'],
                'prenom' => $user['prenom'],
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
