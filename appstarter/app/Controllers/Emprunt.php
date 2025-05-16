<?php
namespace App\Controllers;
use App\Models\EmpruntModel;
use CodeIgniter\Controller;

class Emprunt extends Controller
{
    public function index()
    {
        $model = new EmpruntModel();
        $data['emprunts'] = $model->findAll();
        return view('emprunts/index', $data);
    }

    public function create()
    {
        return view('emprunts/create');
    }

    public function store()
    {
        $model = new EmpruntModel();
        $model->insert([
            'matricule_abonne' => $this->request->getPost('matricule_abonne'),
            'cote_exemplaire' => $this->request->getPost('cote_exemplaire'),
            'date_emprunt' => $this->request->getPost('date_emprunt'),
            'date_retour' => $this->request->getPost('date_retour'),
            'estRenouvele' => $this->request->getPost('estRenouvele')
        ]);
        return redirect()->to('/emprunt');
    }
}
