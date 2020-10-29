<?php 
namespace app\controllers;

 include_once "app/models/Verdura.php";  
 use app\models\Verdura as Verdura;  

class VerduraController{

    function __construct(){
        session_start();

       if(!isset($_SESSION["VerduraList"])){
        $_SESSION["VerduraList"] = array();
    }
 

     }


   static function listaVerduras(){ 
     /*   $verdura1 = new Verdura("Tomate",25.5,"red","TOMON55");
        $verdura2 = new Verdura("Aguacate",95.5,"green","AGUA95");
        
        $lista = array(
            $verdura1,
            $verdura2,
            new Verdura("Cebolla",25.5,"#fff","CE55"),
            new Verdura("Pepino",15.5,"#00ff00","PeON55"),
            new Verdura("Zanahorita",5.5,"#dd2200","ZaON55")
        );*/
       
        $lista = $_SESSION["VerduraList"];

        return $lista;
    

    }

    function agregarVerdura($data){
      
        $_SESSION["VerduraList"][]=new Verdura($data["nombre"], $data["precio"], $data["color"],$data["codigo"]);
        return true;
    }

}