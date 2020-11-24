<?php
namespace app\controllers;

include_once("app/models/Nota.php");
use app\models\Nota;

 class NotasController{


    public function __construct(){ 
  
      }

      public function get($id){
        $r = Nota::get($id);
        if($r->count>0){
         return  $r-> result[0];
        }else{
          return false;
        }

      }

      public function eliminar($id){
        return Nota::delete($id);
      }

    
      public function lista($idUsuario){
        return Nota::all($idUsuario);
      }

      public function listaTodo(){
        return Nota::all();
      }


      public function agregar($notaPOST){

        if(isset($notaPOST['realizada'])){
          $notaPOST['realizada']=true;
        }else{
          $notaPOST['realizada']=false;
        }

        $notaPOST['fechaRecordar'] = !empty($notaPOST['fechaRecordar'])? $notaPOST['fechaRecordar'] : "2000-01-01";

         
        $r=  Nota::create($notaPOST);
        return $r;

      }


      public function editar($notaPOST){
        
        if(isset($notaPOST['realizada'])){
          $notaPOST['realizada']=true;
        }else{
          $notaPOST['realizada']=false;
        } 

        $notaPOST['fechaRecordar'] = !empty($notaPOST['fechaRecordar'])? $notaPOST['fechaRecordar'] : "2000-01-01";


        $r= Nota::update($notaPOST);
        return $r;

      }



 }