<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  $this->load->model('Productos_modelo');
  }

  function index()
  {

    $data['catalogo'] = $this->Productos_modelo->getProductos();
    $this->load->view('productos',$data);
  }

  function guardar()
  {
    if($_POST){
    $guardado=$this->Productos_modelo->guardar($_POST);
      if($guardado == 1){
        print "<script>alert('Los datos de ".$_POST['nombre']." fueron ingresados'); window.location.href = \"/crudcodeigniter/\";</script>";
      }
    }
  }
  function eliminar($producto,$id){
  $eliminado = $this->Productos_modelo->eliminarProducto($id);
  if($eliminado == 1){
      print "<script>alert('Producto numero ".$id." fue eliminado'); window.location.href = \"/crudcodeigniter/\";</script>";
  }
  }

}
