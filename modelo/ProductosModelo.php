<?php
class ProductosModelo{
  private $db;
  private $productos;

  public function __construct(){
    require_once("modelo/Conectar.php");
    $this->db=Conectar::conexion();
    $this->productos=array();
  }

  public function getProductos(){
    $consulta=$this->db->query("SELECT * FROM productos");
    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
      $this->productos[]=$fila;
    }
    return $this->productos;
  }


}
?>
