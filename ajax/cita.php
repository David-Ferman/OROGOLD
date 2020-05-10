<?php
require_once "../controlador/productos.php";
require_once "../modelo/productos.php";
require_once  "../modelo/conexion.php";

class InfoProductos{
    public function correoValido(){
        $respuesta=ProductosControlador::correoValido($_POST['idPrecio']);
        echo $respuesta;
    }
     public function Registro(){
        $respuesta=ProductosControlador::Registro($_POST['nombre'],$_POST['email_reg'],$_POST['contrasena']);
        echo $respuesta;
    }

}


if(isset($_POST['idPrecio'])){
    $instancia=new InfoProductos();
    $instancia->correoValido();
}
if(isset($_POST['email_reg'])){
    $instancia=new InfoProductos();
    $instancia->Registro();
}

?>