<?php

namespace App\Controllers;
use App\Models\LivreModel;
use CodeIgniter\Controller;

class Livre extends Controller
{
public function ajouterLivre()
{
    return view('ajouter_livre');
}

public function enregistrerLivre()
{
    $livreModel = new \App\Models\LivreModel();
    $livreModel->insert([
        'code_catalogue' => $this->request->getPost('code_catalogue'),
        'titre_livre' => $this->request->getPost('titre_livre'),
        'theme_livre' => $this->request->getPost('theme_livre'),
    ]);

    return redirect()->to('/gerer_livre');
}
}