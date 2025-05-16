<?php
namespace App\Controllers;
use App\Models\RetourModel;
use CodeIgniter\Controller;

class Retour extends Controller
{
    public function index()
    {
        $model = new RetourModel();
        $data['retours'] = $model->findAll();
        return view('retours/index', $data);
    }

    public function create()
    {
        return view('retours/create');
    }

    public function store()
    {
        $model = new RetourModel();
        $model->insert([
            'matricule_abonne' => $this->request->getPost('matricule_abonne'),
            'cote_exemplaire' => $this->request->getPost('cote_exemplaire'),
            'date_emprunt' => $this->request->getPost('date_emprunt'),
            'date_retour' => $this->request->getPost('date_retour'),
            'estRenouvele' => $this->request->getPost('estRenouvele')
        ]);
        return redirect()->to('/retour');
    }
}
