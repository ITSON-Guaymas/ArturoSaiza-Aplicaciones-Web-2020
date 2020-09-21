
echo "<br>";
$alumnos=array();

$alumnos[0]="Alan fernando";
$alumnos[1]="Daniel Enrique";
$alumnos[2]="Hilda Ofelia";
$alumnos[3]="Hiram Eduardo";
$alumnos[4]="Jesus francisco";
$alumnos[]="luis gustavo ";
$alumnos[]="melissa villegas ";
$alumnos[]="rene parada ";

$dias=array("lunes","martes","miercoles","jueves","viernes","sabado", "domingo");

$dias2=array(
            "1" => "lunes",
            "2" => "martes",
            "3" => "miercoles",
            "4" => "jueves",
            "5" => "viernes",
            "6" => "sabado", 
            "7" => "domingo");


 $meses=["enero","125" =>"febrero","marzo"];


 $luisGustavo=[
     "edad"=> 21,
     "nombre"=>"Luis Gustavo",
     "apellido" =>"Llanes Lopez",
     "altura" => 1.75,
     "trabajas" => true,
     "amigos"=>["juanito","pedrito"]
 ];



echo "<pre>";
var_dump($alumnos);
var_dump($dias);
var_dump($dias2);
var_dump($meses);
var_dump( $luisGustavo);
echo "</pre>";