<?php
namespace app\controllers;

include_once("app/models/Nota.php");
use app\models\Nota;

 class NotasController{


    public function __construct(){ 
  
      }


      public function eliminar($id){
        return Nota::delete($id);
      }

    
      public function lista(){
        return Nota::all();
      }


      public function agregar($notaPOST){

        if(isset($notaPOST['realizada'])){
          $notaPOST['realizada']=true;
        }else{
          $notaPOST['realizada']=false;
        }

        $r=  Nota::create($notaPOST);
        return $r;

      }



 }