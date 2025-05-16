<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpruntModel extends Model
{
    protected $table = 'emprunte';
    protected $primaryKey = 'cote_exemplaire';
    protected $useAutoIncrement = false;

    protected $allowedFields = [
        'matricule_abonne',
        'cote_exemplaire',
        'date_emprunt',
        'date_retour',
        'estRenouvele'
    ];
}
