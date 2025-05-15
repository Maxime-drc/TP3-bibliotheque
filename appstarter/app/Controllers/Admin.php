<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin');
    }

    public function gererLivre()
    {
        return view('gerer_livre');
    }

    public function gererExemplaire()
    {
        return view('gerer_exemplaire');
    }

    public function gererAbonne()
    {
        return view('gerer_abonne');
    }
}
