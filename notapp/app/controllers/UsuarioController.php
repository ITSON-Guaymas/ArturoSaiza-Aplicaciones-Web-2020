<?php
namespace app\controllers;
 
include_once("app/models/Usuario.php");
use app\models\Usuario;

class UsuarioController{

    public $usuario;

    public function __construct(){
        $this->usuario = new Usuario();

    }
    
    function login($usuario, $contrasena){ 
       $result=  $this->usuario ->login($usuario, $contrasena);

       return  $result;

    }

    function create( ){ 
        $result=  $this->usuario ->create();
 
        return  $result;
 
     }

}