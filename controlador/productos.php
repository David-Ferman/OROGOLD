<?php

class ProductosControlador{
    static public function correoValido($email){
        $datos=ProductosModelo::correoValido($email);
        return $datos;
    }
    static public function Registro($nombre,$email,$contrasena){
        $respuesta=ProductosModelo::Registro($nombre,$email,$contrasena);
        return $respuesta;
    }
    static public function imagenes(){
        $respuesta=ProductosModelo::imagenes();
        return $respuesta;
    }
    static public function encabezado($categoria){
        $respuesta=ProductosModelo::encabezado($categoria);
        return $respuesta;
    }
}

