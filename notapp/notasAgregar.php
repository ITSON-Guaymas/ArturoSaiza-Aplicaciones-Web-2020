<?php include("includes/comun.php"); ?>
<?php
include_once("app/controllers/NotasController.php");
use app\controllers\NotasController;

if(isset($_POST["titulo"])){

  $notasC = new NotasController();

  $r= $notasC->agregar($_POST);

  if($r){
    header("location:notas.php?notaagregada=$r");
  }else{
    $error="Completa correctamente el formulario";
  }
  
/* 
 echo "<pre>";
   var_dump($_POST);
   echo "</pre>"; 
} */

?>


<!DOCTYPE html>
<html lang="es">
<head>
<title>Home</title>
  <?php include("includes/head.php"); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">


<!-- Site wrapper -->
<div class="wrapper">

  <!-- Navbar -->
<?php  include("includes/menu.php");  ?>
  <!-- / navbar -->

  <!-- Main Sidebar Container -->
<?php include("includes/menu_izquierda.php"); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agregar Nota</h1>
            <p><?= isset($error)? $error : " "  ; ?> </p>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
<!-- desde aqui podemos cambiar todo el contenido -->
    <form action="" method="POST" class="card-body row">
     
        <div class="form-group col-md-4">
          <label for="">Titulo</label>
          <input class="form-control" type="text" name="titulo"
          value="<?= isset($_POST['titulo'])? $_POST['titulo'] : ""  ; ?>"
          >
        </div>
       
        <div class="form-group col-md-4">
          <label for="">Cuerpo</label>
          <input class="form-control" type="text" name="cuerpo" required>
        </div>

        <!--  <input type="text" name="estado"> -->
        <div class="form-group col-md-4">
          <label for="">Tipo</label>
          <select class="form-control" name="tipo" required>
          <option value="normal" selected>Nota</option>
          <option value="tarea">Tarea</option>
          <option value="recordatorio">Recordatorio</option>
          </select> 
        </div>

        <div class="form-group col-md-4">
          <label for="">Fecha de Recordatorio</label>
          <input class="form-control" type="date" name="fechaRecordar" >
        </div>

        <div class="form-group col-md-4">
          <label for="">Se realizo la tarea</label>
          <input class="form-control" type="checkbox" name="realizada">
        </div>

        <input class="form-control col-md-4" type="hidden" name="usuario" value="<?=$usuario['id']; ?>">
        <!-- <input type="text" name="fecha">  -->

        <div class="form-group col-md-12">
          <button type="submit" class="btn btn-success"> Agregar </button>
        </div>
    </form>

          


<!-- hasta aqui, podemos cambiar todo el contenido -->

          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->










  <?php include("includes/footer.php");  ?>
   
  <!-- Control Sidebar -->
  <?php include("includes/control_sidebar.php");  ?>
  <!-- /.control-sidebar -->

  
</div><!-- ./wrapper -->

<?php include("includes/scripts.php"); ?>



</body>
</html>
