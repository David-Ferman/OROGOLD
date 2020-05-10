<?php

class ProductosModelo{
    static public function correoValido($email){
        
        $stm=Conexion::conectar()->prepare("SELECT * FROM citas WHERE email=:email");
        $stm->bindParam(":email",$email,PDO::PARAM_STR);
        $stm->execute();
        if($stm->rowCount()>=1){
            return "repetido";
        }else{
        return "unico";
        }
        
        $stm->close();
    }

    static public function Registro($nombre,$email,$contrasena){
       $stm=Conexion::conectar()->prepare("INSERT INTO citas (nombre, email, contrasena) VALUES(:nombre, :email,:contrasena )");
        $stm->bindParam(":nombre",$nombre,PDO::PARAM_STR);
        $stm->bindParam(":email",$email,PDO::PARAM_STR);
        $stm->bindParam(":contrasena",$contrasena,PDO::PARAM_STR);
        if($stm->execute()){
            return "ok";
        }
        else{
            return "error";
        }
    }
    static public function imagenes(){
        $stm=Conexion::conectar()->prepare("SELECT * FROM imagenes");
        $stm->execute();
        return $stm->fetchAll();
        
        $stm->close();
    }  
    static public function encabezado($categoria){
        $stm=Conexion::conectar()->prepare("SELECT * FROM encabezados WHERE categoria=:categoria");
        $stm->bindParam(":categoria",$categoria,PDO::PARAM_STR);
        $stm->execute();
        return $stm->fetch();
        
        
        $stm->close();
    } 
    
}