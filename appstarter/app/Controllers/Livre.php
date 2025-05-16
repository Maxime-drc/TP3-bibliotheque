<?php
namespace App\Controllers;
use App\Models\LivreModel;
use CodeIgniter\Controller;

class Livre extends Controller
{
    public function index()
    {
        $model = new LivreModel();
        $data['livres'] = $model->findAll();
        return view('livres/index', $data);
    }

    public function create()
    {
        return view('livres/create');
    }

    public function store()
    {
        $model = new LivreModel();
        $model->insert([
            'code_catalogue' => $this->request->getPost('code_catalogue'),
            'titre_livre' => $this->request->getPost('titre_livre'),
            'theme_livre' => $this->request->getPost('theme_livre')
        ]);
        return redirect()->to('/livre');
    }
}
