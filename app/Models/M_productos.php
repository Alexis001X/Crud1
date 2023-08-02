<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_productos extends Model{
    protected $table      = 'productos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_prod';
    protected $allowedFields = ['nombre_prod','marca_prod','categoria_prod','importado_prod','descrip_prod','precio_prod'];
}