<?php include("includes/comun.php"); ?>
<?php
 include_once("app/controllers/NotasController.php");
 include_once("app/models/Usuario.php");

 use  app\controllers\NotasController;
 use  app\models\Usuario;

 $notasController = new NotasController();
 
 //print_r($todasLasNotas);

 if(isset($_GET['eliminar'])){

 $statusEliminar = $notasController -> eliminar($_GET['eliminar']);

 }

 
 
 $todasLasNotas =  $notasController->lista($usuario["id"]);

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
            <h1>Notas</h1>
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

<?php if(isset($_GET['notaagregada'])){ ?>
<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h5><i class="icon fas fa-check"></i> Bien!</h5>
Nota agregada correctamente!
</div>
<?php } ?>

<?php if(isset($_GET['eliminar'])){ ?>
<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h5><i class="icon fas fa-check"></i> Notas!</h5>
Se elimino la nota Correctamente!
</div>
<?php } ?>

<p>  
<a href="notasAgregar.php" class="btn btn-success">Agregar</a>  <br> 

</p>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de Notas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Titulo</th>
                      <th>Nota</th>
                      <th>Fecha</th> 
                      <th>tipo</th> 
                      <th style="width: 40px">  </th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  $count = $todasLasNotas->count;
                  foreach ($todasLasNotas->result as $i => $nota) {  ?>
                    <tr>
                      <td> <?= $count-- ?> </td>
                      <td>
                     
                      <?= $nota["titulo"]; ?></td>
                      <td><?= $nota["cuerpo"]; ?></td>
                      <td><?= $nota["fecha"]; ?></td>
                      <td><?= $nota["tipo"]; ?></td>
                      <td>
                      <a href="notasEditar.php?id=<?= $nota["id"]; ?>">
                        <span class="badge bg-warning">editar</span>
                      </a>
                      <a href="?eliminar=<?= $nota["id"]; ?>">
                        <span class="badge bg-danger">eliminar</span>
                      </a>
                      </td>
                    </tr>
                    <tr>
     
                  <?php } ?>
       
            
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
          


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
