<?php
 

  include_once "app/controllers/VerduraController.php";  
  use app\controllers\VerduraController as VerduraController;  
  
  $verduraController = new VerduraController();
  $ListaVerduras = $verduraController ->listaVerduras();
  //$ListaVerduras = VerduraController::listaVerduras();

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
          <a href="agregarVerdura.php" class="btn btn-success">Agregar</a>
          <br><br>
        </div>


          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Verduras</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr> 
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Color</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($ListaVerduras as $verdura){  ?>  
                    <tr>
                      <td><?=$verdura->codigo; ?></td>
                      <td><?=$verdura->nombre; ?></td>
                      <td>  $<?=$verdura->precioIVA(); ?></td>
                      <td><span class="tag tag-success" style="background:<?=$verdura->color; ?>;  color:#fff; padding:4px; border-radio:5px;"> <?=$verdura->color; ?></span></td>
                    </tr> 
                  <?php } ?>
                     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
