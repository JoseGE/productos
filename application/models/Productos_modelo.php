<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_modelo extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function guardar($producto){
    if($this->db->insert('productos',$producto)){
      return 1;
    }
  }
  function getProductos(){
    $productos = $this->db->get('productos');
    return $productos->result();
  }
function eliminarProducto($id){
  $this->db->where('idproductos',$id);
  $this->db->delete('productos');
  return 1;
}

}
