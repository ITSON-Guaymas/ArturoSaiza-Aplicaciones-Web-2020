<?php
//namespace  app\models;

class Verdura{
    
    var $nombre;
    public $color;
    private $precio;
    public $codigo;
    
   function  __construct($nombre, $precio, $color="", $codigo=""){ 
        $this -> color = $color;
        $this -> precio = $precio;
        $this ->codigo = $codigo;
        $this -> nombre= $nombre;

   }

   public function  precioIVA(){
       return  $this ->precio*1.16;
   }

}