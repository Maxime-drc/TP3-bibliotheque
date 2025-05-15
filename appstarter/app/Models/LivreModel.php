<?php
namespace App\Models;
use CodeIgniter\Model;

class LivreModel extends Model
{
    protected $table = 'livre';
    protected $primaryKey = 'code_catalogue';
    protected $allowedFields = ['code_catalogue', 'titre_livre', 'theme_livre'];
    public $useTimestamps = false;
}
