public function creer()
{
    if ($this->request->getMethod() === 'post') {
        $model = new \App\Models\AbonneModel();

        $data = $this->request->getPost([
            'nom_abonne', 'date_naissance_abonne', 'adresse_abonne',
            'telephone_abonne', 'CSP_abonne'
        ]);
        $data['mot_de_passe'] = password_hash($this->request->getPost('mot_de_passe'), PASSWORD_DEFAULT);
        $data['date_adhesion_abonne'] = date('Y-m-d');

        $model->insert($data);

        return redirect()->to('/abonne/login')->with('message', 'Compte créé avec succès ! Connectez-vous.');
    }

    return view('abonne/creer');
}
