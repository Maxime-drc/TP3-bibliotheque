<?php
namespace App\Models;
use CodeIgniter\Model;

class ExemplaireModel extends Model
{
    protected $table = 'exemplaire';
    protected $primaryKey = 'cote_exemplaire';
    protected $allowedFields = [
        'nom_editeur', 'code_usure', 'date_acquisition',
        'emplacement_rayon', 'code_catalogue'
    ];
}
