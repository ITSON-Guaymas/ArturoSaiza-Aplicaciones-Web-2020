<?php include("includes/comun.php"); ?> 
<?php
include_once("app/controllers/NotasController.php");
use app\controllers\NotasController;



  $notasC = new NotasController();


  if(isset($_POST['titulo'])){

    $r= $notasC -> editar($_POST);
    


    
  }


  $nota = $notasC->get($_GET['id']);




  /*
  if($r){
    header("location:notas.php?notaagregada=$r");
  }else{
    $error="Completa correctamente el formulario";
  }*/

  /*echo "<br>";
   print_r($_POST);
   echo "<br>";*/


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
            <h1>Editar nota</h1>

<?php if($r){ ?>
      <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-check"></i> Bien!</h5>
      La nota se edito correctamente!
      </div>
<?php }else{ ?>

      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-check"></i> Error!</h5>
      No se pudo completar la edicion!
      </div>

<?php } ?>




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
          value="<?= $nota["titulo"]; ?>"
          >
        </div>
       
        <div class="form-group col-md-4">
          <label for="">Cuerpo</label>
          <input class="form-control" type="text" name="cuerpo"
          value="<?= $nota["cuerpo"]; ?>"
           required>
        </div>

        <!--  <input type="text" name="estado"> -->
        <div class="form-group col-md-4">
          <label for="">Tipo</label>
          <select class="form-control" name="tipo" required>
          <option value="<?= $nota["tipo"]; ?>" selected><?= $nota["tipo"]; ?></option>
          <option value="normal" >Nota</option>
          <option value="tarea">Tarea</option>
          <option value="recordatorio">Recordatorio</option> 
         
          </select> 
        </div>

        <div class="form-group col-md-4">
          <label for="">Fecha de Recordatorio</label>
          <input class="form-control" type="date" name="fechaRecordar"
          value="<?= $nota["fecha"]; ?>"
           >
        </div>


      <?php if($nota["realizada"]){ ?>
       
        <div class="form-group col-md-4">
          <label for="">Se realizo la tarea</label>
          <input class="form-control" type="checkbox"
          checked
          name="realizada">
        </div>

        <?php }else{  ?> 
        
          <div class="form-group col-md-4">
          <label for="">Se realizo la tarea</label>
          <input class="form-control" type="checkbox" 
          name="realizada">
        </div> 

          <?php   } ?>

    



        <input  type="hidden" name="usuario" value="<?= $nota["usuario"]; ?>">

        <input  type="hidden" name="id" value="<?= $nota["id"]; ?>">
 

        <div class="form-group col-md-12">
          <button type="submit" class="btn btn-success"> Guardar </button>
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
