<?php

function promedioMaterias($u1, $u2, $u3){
    return ($u1+$u2+$u3)/3;
   }
   
   
   function verificarPase($calificacion){
   
       if($calificacion >= 7){
           return true;
       }else{
           return false;
       }
   
   }

   