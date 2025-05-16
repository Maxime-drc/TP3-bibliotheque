<?php
namespace App\Models;

class UserModel extends \CodeIgniter\Model
{
    protected $table = 'abonne';
    protected $primaryKey = 'matricule_abonne';
    protected $allowedFields = ['matricule_abonne', 'nom_abonne'];
    protected $returnType = 'array';
}
?> 