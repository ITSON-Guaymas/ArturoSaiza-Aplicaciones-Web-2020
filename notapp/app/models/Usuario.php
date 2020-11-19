<?php
namespace app\models;

include_once("config/database.php");
use config\MYSQL;

class Usuario{

      public $id;
      public $nombre;
      public $apellidos;
      public $correo;
      public $contrasena;
      public $tipo;

    

    public function __construct($id, $nombre, $apellidos, $correo, $contrasena, $tipo ){
      $this -> id = $id;
      $this -> nombre = $nombre; 
      $this -> apellidos = $apellidos; 
      $this -> correo = $correo; 
      $this -> contrasena = $contrasena; 
      $this -> tipo = $tipo; 
    }


    public static function login( $usuario, $contrasena){
       $mysql = new MYSQL();
       $sql =  $mysql->consulta("SELECT * FROM usuarios where correo = '$usuario' and contrasena = '$contrasena'  ");     
       return  $mysql->get($sql);      
    }

    
    public static function create(){
        $mysql = new MYSQL();
        $sql =  $mysql->consulta("INSERT INTO usuarios (nombre, apellidos, correo,contrasena,tipo)
        VALUES ('John', 'Doe', 'john@exampled.com', 'asd', 'normal')");     
        return  $sql;      
     }
 

 
 
 

      
 


}