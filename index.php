<?php
require_once "controlador/controlador.php";
require_once "modelo/modelo.php";

require_once "controlador/productos.php";
require_once "modelo/productos.php";
require_once  "modelo/conexion.php";
require_once "modelo/rutaStatica.php";



$controlador=new Controlador();
$controlador->Plantilla();