<?php
namespace app\models;

include_once("config/database.php");
use config\MYSQL;

class Nota{

    public $id;
    public $titulo;
    public $cuerpo;
    public $estado;
    public $tipo;
    public $fechaRecordar;
    public $realizada;
    public $usuario;
    public $fecha; 

    public function __construct(){
        
    }

    public static function create($notaPOST){

        $mysql = new MYSQL();

        $fecha = date("Y-m-d");
  
        $sql = "INSERT INTO notas (titulo, cuerpo, estado, tipo, fechaRecordar, realizada, usuario, fecha )
        VALUES ('$notaPOST[titulo]', '$notaPOST[cuerpo]', ' ', '$notaPOST[tipo]', '$notaPOST[fechaRecordar]', $notaPOST[realizada], $notaPOST[usuario],'$fecha')  ";
       
      // return  $consulta =  $mysql->consulta($sql);
        return $mysql->insert($sql);

         

    }


}