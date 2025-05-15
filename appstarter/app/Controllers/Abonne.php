<?php
namespace App\Controllers;
use App\Models\AbonneModel;
use CodeIgniter\Controller;

class Abonne extends Controller
{
    public function index()
    {
        $model = new AbonneModel();
        $data['abonnes'] = $model->findAll();
        return view('abonnes/index', $data);
    }

    public function create()
    {
        return view('abonnes/create');
    }

    public function store()
    {
        $model = new AbonneModel();
        $model->insert([
            'nom_abonne' => $this->request->getPost('nom_abonne'),
            'date_naissance_abonne' => $this->request->getPost('date_naissance_abonne'),
            'date_adhesion_abonne' => $this->request->getPost('date_adhesion_abonne'),
            'adresse_abonne' => $this->request->getPost('adresse_abonne'),
            'telephone_abonne' => $this->request->getPost('telephone_abonne'),
            'CSP_abonne' => $this->request->getPost('CSP_abonne'),
        ]);
        return redirect()->to('/abonne');
    }
}
