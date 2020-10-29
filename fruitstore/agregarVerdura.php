<?php
 

  include_once "app/controllers/VerduraController.php";  
  use app\controllers\VerduraController as VerduraController;  

  if(isset($_POST['nombre'])){
    $verduraController = new VerduraController();

    if( $verduraController ->agregarVerdura($_POST) ){
        header("location:verduras.php");
    }
    }


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
            <h1>Home</h1>
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
<pre>
<?php
 // print_r($ListaVerduras);
?>
</pre>
        <!-- /. inicio tabla verduras -->
        <div class="row">
 


          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Agregar Verdura</h3>

           
              </div>
              <!-- /.inicio form -->
              <form action="agregarVerdura.php" method="POST" >
                <div class="card-body">
                 
                <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Ejemplo: Tomate">
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo: Juanito R.">
                </div>

                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" name="precio"  id="precio" placeholder="Ejemplo: 55.55">
                </div>

                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="color" class="form-control"name="color"   id="color"  >
                </div>
             
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
              <!-- / fin form-->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /. fin tabla verduras -->
          


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
