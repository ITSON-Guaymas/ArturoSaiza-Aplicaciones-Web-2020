<?php
namespace config;
class MySQL{

  private $servidor = 'localhost';
  private $baseDatos = 'notasdb';
  private $usuarioBd = 'root';
  private $passwordBd = 'zapato1';

  private $conexion;
  private $total_consultas;

 public function __construct(){

  if(!isset($this->conexion)){
  $this->conexion = (mysqli_connect($this->servidor,$this->usuarioBd,$this->passwordBd)) or die(mysqli_error());
  mysqli_query($this->conexion,"SET NAMES 'utf8'");
  mysqli_select_db($this->conexion,$this->baseDatos) or die(mysqli_error());
  }
  }

 public function consulta($consulta){
  $this->total_consultas++;
  $resultado = mysqli_query($this->conexion,$consulta);
  if(!$resultado){
  //echo 'MySQL Error: ' . mysqli_error();
  //exit;
  return false;
  }
  return $resultado;
  }


  public function insert(){
    $resultado = mysqli_query($this->conexion,$consulta);
    if($resultado){ 
      return mysqli_insert_id($conn); 
    } else { 
      return false;
    }
  }

 public function fetch_array($consulta){
  return mysqli_fetch_array($consulta);
  }

   public function fetch_assoc($consulta){
  return mysqli_fetch_assoc($consulta);
  }


 public function num_rows($consulta){
  return mysqli_num_rows($consulta);
  }

 public function getTotalConsultas(){
  return $this->total_consultas;
  } 

  public function get($consulta){
    $linea=mysqli_fetch_assoc($consulta);
    $res= new \stdClass;
    $res -> count = mysqli_num_rows($consulta);
    if($res -> count){
      do{
          $res->result[]=$linea;
          }while($linea=mysqli_fetch_assoc($consulta));
        }
    return   $res;
  }

}
?>