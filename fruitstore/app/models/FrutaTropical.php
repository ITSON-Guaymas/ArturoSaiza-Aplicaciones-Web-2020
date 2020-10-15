<?php

include_once("Fruta.php");

class FrutaTropical extends Fruta{

    public $region;

    function __construct($nombre,$color, $codigoBarras, $region){

        $this ->region = $region;
        $this -> nombre= $nombre;
        $this -> color = $color;
        $this ->codigoBarras = $codigoBarras;

    }





}