<?php

class NotaControlador {

    public function listar () {
        require_once "./modelos/nota.php";
        //Logica de la accion del controlador
        $nota = new Nota();
        $notas = $nota -> conseguirTodos("notas");
        
        require_once './vistas/notas/listar.php';
    }

    public function crear(){
        require_once 'modelos/nota.php';

        $nota = new nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde php mvc ESTA SI");
        $nota->setDescripcion("Marico que locura esta ñelda");
        $guardar = $nota->guardar();
        header("location: index.php?controlador=Nota&accion=listar");

    }

    public function borrar(){
        
    }

}

?>