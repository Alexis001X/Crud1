<?php 
namespace App\Controllers;

use App\Models\M_clientes;
use CodeIgniter\Controller;

class C_clientes extends Controller{
    public function listarc(){
        $cli = new M_clientes();
        $datosc['clientes']=$cli->findAll();
        return view('clientes/lista2',$datosc);
    }
    public function agregarc(){
        return view('clientes/agregar2');
       }
    
       public function insertarc()
       {
          
           $cli = new M_clientes();
    
           $data2=[
               'nombre_cli' => $_POST['nombre'],
               'apellido_cli' => $_POST['apellido'],
               'ci_cli' => $_POST['cedula'],
               'telf_cli' => $_POST['telefono'],
               'correo_cli' => $_POST['correo'],
               'socio_cli' => $_POST['socio']
           ];
           // considera que aqui colocamos los nombres que estan en la base de datos primero y luego de donde vienen
           //los datos en este caso del formulario
    
           $cli->insert($data2);
           return redirect()->to(base_url('clientes/lista2'));   
       }
       public function eliminarc($id_cliente=null)
        {
            
          
    
           $cli = new M_clientes();
            $cli->delete($id_cliente);
    
            
            return redirect()->to(base_url('clientes/lista2'));
        }
        public function editarc($id_cliente = null)
        {
    
            $cli = new M_clientes();
            $registro2['clientes']= $cli->find($id_cliente);
    
          return view('clientes/actualizando2',$registro2);
         
    
    
           // return redirect()->to(base_url());
        }
        public function actualizarc()
        {
    
            $cli = new M_clientes();
            $id_cliente= $_POST['id'];
    
            $data = [
    
                'nombre_cli' => $_POST['nombre'],
               'apellido_cli' => $_POST['apellido'],
               'ci_cli' => $_POST['cedula'],
               'telf_cli' => $_POST['telefono'],
               'correo_cli' => $_POST['correo'],
               'socio_cli' => $_POST['socio']
            ];
            $cli->update($id_cliente,$data);
    
            
    
    
    
           return redirect()->to(base_url('clientes/lista2'));
        }
    
    }
