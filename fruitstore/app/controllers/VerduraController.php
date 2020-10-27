<?php 
 include_once "app/models/Verdura.php";  
 use app\models\Verdura as Verdura;  

class VerduraController{

    function __construct(){
       
  

     }


   static function listaVerduras(){

        $verdura1 = new Verdura("Tomate",25.5,"rojo","TOMON55");
        $verdura2 = new Verdura("Aguacate",95.5,"verde","AGUA95");
        
        $lista = array(
            $verdura1,
            $verdura2,
            new Verdura("Cebolla",25.5,"blanco","CE55"),
            new Verdura("Pepino",15.5,"verde","PeON55"),
            new Verdura("Zanahorita",5.5,"naranja","ZaON55")
        );

        return $lista;
    

    }

}