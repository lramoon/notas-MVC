<!-- Clases de php donde se reciben los datos de las vistas actua como intermediario entre vistas y modelos -->
<?php

class UsuarioControlador {

    public function mostrarUsuarios(){
        require_once './modelos/usuario.php';

        $usuario = new Usuario();
        $todosLosUsuarios = $usuario->conseguirTodos('usuario');
        require_once './vistas/usuarios/mostrarTodos.php';
    }

    public function crearUsuario(){
        require_once './vistas/usuarios/crear.php';
    }

    public function actualizarUsuario(){

    }

    public function eliminarUsuario(){

    }
    
}

?>