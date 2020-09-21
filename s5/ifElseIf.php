<?php

$hora= date("G");

$hora=21;

if($hora <"12"){

    echo "Buenos Dias";

}elseif($hora <"20"){

    echo "Buenas Tarde";
}else{

    echo "Buenas Noches";
}



?>