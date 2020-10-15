<?php

class Fruta{

    public $nombre;
    public $color;
    private $precio;
    protected $codigoBarras;

    function __construct($nombre="" , $color="" , $precio="" ){
        $this -> nombre = $nombre;
        $this -> color = $color;
        $this -> precio = $precio;
    }

    function get_nombre(){
        return $this -> nombre;
    }

    function get_color(){
        return $this -> color;
    } 

    function set_nombre($nombre){
        $this -> nombre = $nombre;
    }

    function get_precio(){
        return $this -> precio * 1.16;
    }


}