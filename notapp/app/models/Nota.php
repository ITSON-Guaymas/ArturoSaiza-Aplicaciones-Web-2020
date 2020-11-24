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



    public static function delete($id){
        $mysql = new MYSQL();
        $sql = "DELETE FROM notas WHERE  id=$id;";
        return $mysql->consulta($sql);

    }

    public static function get($id){
        $mysql = new MYSQL();
        $sql = "SELECT * FROM notas WHERE id = $id";
        $consulta = $mysql->consulta($sql);
        return  $mysql->get($consulta);

    }


    public static function all($idUsuario=0){
        $where ="";
        if($idUsuario!=0){  $where =" where usuario= $idUsuario";  }

        $mysql = new MYSQL();
        $sql = "select * from notas $where order by id DESC";
        $consulta =  $mysql->consulta($sql);
        return  $mysql->get($consulta);
    }

    public static function create($notaPOST){

        $mysql = new MYSQL();

        $fecha = date("Y-m-d");
  
        $sql = "INSERT INTO notas (titulo, cuerpo, estado, tipo, fechaRecordar, realizada, usuario, fecha )
        VALUES ('$notaPOST[titulo]', '$notaPOST[cuerpo]', ' ', '$notaPOST[tipo]', '$notaPOST[fechaRecordar]', $notaPOST[realizada], $notaPOST[usuario],'$fecha')  ";
       
      // return  $consulta =  $mysql->consulta($sql);
        return $mysql->insert($sql);

         

    }

    public static function update($notaPOST){
    $mysql = new MYSQL();   
 
    $sql = "UPDATE  notas SET 
    titulo='$notaPOST[titulo]', 
    cuerpo='$notaPOST[cuerpo]', 
    tipo='$notaPOST[tipo]', 
    fechaRecordar='$notaPOST[fechaRecordar]', 
    realizada='$notaPOST[realizada]',
    usuario='$notaPOST[usuario]'  
    WHERE id=$notaPOST[id]";

   return  $mysql->consulta($sql); 
    }

   // 


}