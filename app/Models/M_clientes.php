<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_clientes extends Model{
    protected $table      = 'clientes';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $primaryKey = 'id_cliente';
    protected $allowedFields = ['nombre_cli','apellido_cli','ci_cli','telf_cli','correo_cli','socio_cli'];
}