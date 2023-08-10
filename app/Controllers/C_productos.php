<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_productos;
class C_productos extends Controller{

    public function listar(){
        $prod = new m_productos();
        $datos['productos']=$prod->findAll();
        return view('tienda/lista',$datos);
    }
   public function agregar(){
    return view('tienda/agregar');
   }

   public function insertar()
   {
      
       $prod = new M_productos();

       $data=[
           'nombre_prod' => $_POST['nombre'],
           'marca_prod' => $_POST['marca'],
           'categoria_prod' => $_POST['categoria'],
           'importado_prod' => $_POST['importado'],
           'descrip_prod' => $_POST['descripcion'],
           'precio_prod' => $_POST['precio']
       ];
       // considera que aqui colocamos los nombres que estan en la base de datos primero y luego de donde vienen
       //los datos en este caso del formulario

       $prod->insert($data);
       return redirect()->to(base_url('tienda/lista'));   
   }
   public function eliminar($id_prod=null)
    {
        
      

       $prod = new M_productos();
        $prod->delete($id_prod);

        
        return redirect()->to(base_url('tienda/lista'));
    }
    public function editar($id_prod = null)
    {

        $prod = new M_productos();
        $registro['productos']= $prod->find($id_prod);

      return view('actualizando',$registro);
     


       // return redirect()->to(base_url());
    }
    public function actualizar()
    {

        $prod = new M_productos();
        $id_prod= $_POST['id'];

        $data = [

            'nombre_prod' => $_POST['nombre'],
           'marca_prod' => $_POST['marca'],
           'categoria_prod' => $_POST['categoria'],
           'importado_prod' => $_POST['importado'],
           'descrip_prod' => $_POST['descripcion'],
           'precio_prod' => $_POST['precio']
        ];
        $prod->update($id_prod,$data);

        



       return redirect()->to(base_url('tienda/lista'));
    }

}