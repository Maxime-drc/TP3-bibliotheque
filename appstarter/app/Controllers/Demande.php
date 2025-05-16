<?php
namespace App\Controllers;
use App\Models\DemandeModel;
use CodeIgniter\Controller;

class Demande extends Controller
{
    public function index()
    {
        $model = new DemandeModel();
        $data['demandes'] = $model->findAll();
        return view('demandes/index', $data);
    }

    public function create()
    {
        return view('demandes/create');
    }

    public function store()
    {
        $model = new DemandeModel();
        $model->insert([
            'matricule_abonne' => $this->request->getPost('matricule_abonne'),
            'code_catalogue' => $this->request->getPost('code_catalogue'),
            'date_demande' => $this->request->getPost('date_demande')
        ]);
        return redirect()->to('/demande');
    }
}
