<!-- Aca se interactua con la base de datos -->
<?php

require_once 'ModeloBase.php';

class Usuario extends ModeloBase {
    
    public $nombre;
    public $apellido;
    public $email;
    public $pass;

    public function __construct()
    {
        parent::__construct();
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

}

?>