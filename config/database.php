<?php

class Database {

    public static function conectar(){
        
         $host = "localhost";
         $usuario = 'root';
         $pass = '';
         $bd = 'notas';

        $conectar = new mysqli($host,$usuario,$pass,$bd);
        $conectar -> query("SET NAMES 'utf8'");
        return $conectar;
    }

}
