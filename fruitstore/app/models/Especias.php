<?php


class Especias{

    public $nombre;
    private $precio;
    public $precioIva;

    function __construct($nombre, $precio){
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> precioIva = $precio*1.16;
    }
}