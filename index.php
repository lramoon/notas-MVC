<?php

//auto carga de clases
require_once 'autoload.php';

if(isset($_GET['controlador'])){
    $nombre_controlador = $_GET['controlador']."Controlador";
}else{
        echo "La pagina" . "$nombre_controlado" . " no existe";
        exit();
}


    if(isset($nombre_controlador) && class_exists($nombre_controlador)){
        $controlador = new $nombre_controlador();
            if(isset($_GET['accion']) && method_exists($controlador, $_GET['accion'])){
                $accion = $_GET['accion'];
                $controlador->$accion();
            }else {
                echo "La pagina que buscas no existe";
            }
    }else {
        echo "La pagina no existe";
    exit();
    }



?>