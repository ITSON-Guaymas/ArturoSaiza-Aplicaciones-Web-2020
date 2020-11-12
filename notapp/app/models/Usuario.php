<?php
namespace app\models;

include_once("config/database.php");
use config\MYSQL;

class Usuario{

    

    public function __construct(){
      
    }


    public static function login( $usuario, $contrasena){
       $mysql = new MYSQL();
       $sql =  $mysql->consulta("SELECT * FROM usuarios where correo = '$usuario' and contrasena = '$contrasena'  ");     
       return  $mysql->get($sql);      
    }

    /*
    public static function create(){
        $mysql = new MYSQL();
        $sql =  $mysql->consulta("INSERT INTO usuarios (nombre, apellidos, correo,contrasena,tipo)
        VALUES ('John', 'Doe', 'john@exampled.com', 'asd', 'normal')");     
        return  $sql;      
     }
*/

 
 
 

      
 


}