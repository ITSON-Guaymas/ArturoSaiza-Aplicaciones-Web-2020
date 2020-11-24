<?php
namespace app\controllers;
 
include_once("app/models/Usuario.php");
use app\models\Usuario;

class UsuarioController{

   

    public function __construct(){
      //  $this->usuario = new Usuario();

    }

    public function registrar($usuarioPOST){

        $r=  Usuario::Create($usuarioPOST);

        return $r;

    }
    /*
    function login($usuario, $contrasena){ 
     // $r=  $this->usuario -> login($usuario, $contrasena);
     $r=  Usuario::login($usuario, $contrasena);
       
       if($r->count >0){

           $usuario = new Usuario(
               $r->result[0]["id"],
               $r->result[0]["nombre"],
               $r->result[0]["apellidos"],
               $r->result[0]["correo"],
               $r->result[0]["contrasena"],
               $r->result[0]["tipo"]
           ); 
           session_start();
           $_SESSION["usuario"] =  $usuario; 
      

       }

       return $r;

    }
*/
    function login($usuario, $contrasena){ 
      
        $r =  Usuario::login($usuario, $contrasena);
          
          if($r->count >0){
    
              session_start();
              $_SESSION["usuario"] = $r->result[0]; 
         
   
          }
   
          return $r;
   
       }


    public function logout(){
        session_start(); 
        unset($_SESSION["usuario"]);
    }
/*
    function create( ){ 
        $result=  $this->usuario ->create();
 
        return  $result;
 
     }
*/
}