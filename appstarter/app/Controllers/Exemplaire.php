<?php
namespace App\Controllers;
use App\Models\ExemplaireModel;
use CodeIgniter\Controller;

class Exemplaire extends Controller
{
    public function index()
    {
        $model = new ExemplaireModel();
        $data['exemplaires'] = $model->findAll();
        return view('exemplaires/index', $data);
    }

    public function create()
    {
        return view('exemplaires/create');
    }

    public function store()
    {
        $model = new ExemplaireModel();
        $model->insert([
            'nom_editeur' => $this->request->getPost('nom_editeur'),
            'code_usure' => $this->request->getPost('code_usure'),
            'date_acquisition' => $this->request->getPost('date_acquisition'),
            'emplacement_rayon' => $this->request->getPost('emplacement_rayon'),
            'code_catalogue' => $this->request->getPost('code_catalogue')
        ]);
        return redirect()->to('/exemplaire');
    }
}
