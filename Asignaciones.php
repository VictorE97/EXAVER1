<?php

    session_start();

    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }

    $nombre = $_SESSION['nombreUsuario'];
    $idUsuarioSesion = $_SESSION['id'];
    echo ($idUsuarioSesion);
    //$tipo_equipo = $_SESSION['idEquipo'];
    //$tipo_perfil = $_SESSION['idPerfil'];

?>

<?php
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT usuarios.nombre AS nombreUsuario, equipo.nombre AS nombreEquipo, perfil.nombre AS nombrePerfil, id, equipo.idEquipo, perfil.idPerfil
FROM usuarios
LEFT JOIN usuarios_equipo
ON usuarios.id = usuarios_equipo.idUsuario
LEFT JOIN equipo
ON equipo.idEquipo = usuarios_equipo.idEquipo
LEFT JOIN usuarios_perfiles
ON usuarios.id = usuarios_perfiles.idUsuario
LEFT JOIN perfil
ON perfil.idPerfil = usuarios_perfiles.idPerfil";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EXAVER</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">EXAVER</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuracion</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <?php include ('Menu/Menu5.php'); ?>
                            <!--?php if($tipo_perfil == 5) { ?-->
                            
                                <!--div class="sb-sidenav-menu-heading">Gestion</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Usuarios.php">Usuarios</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Equipo" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Equipos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Equipo" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Asignaciones.php">Equipos</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Proceso</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Version" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Version Examen
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Version" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Version.php">Version Examen</a>
                                </nav>
                            </div-->


                        <!--?php } ?-->         
                        </div>
                    </div>

                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div> 
            <div id="layoutSidenav_content">
                <main>

                <div class="container"> <br>
                <!-- Button trigger modal -->

<!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPerfil">
  Register Profile
</button-->

<!-- Modal -->
<!--div class="modal fade" id="ModalEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Agregar/Agregar_Equipo.php" method="POST">
            <div class="row">
                <div class="col">
                    <input type="hidden" name="idUsuarioModalEquipo" id="idUsuarioModalEquipo" class="form-control" placeholder="User">
                </div>
                <div class="col">
                <label for="idEquipo">Team</label>
                        <select class="form-control" id="idEquipo" name="idEquipo">
                            <option value="0">--Selecciona una opción---</option>  
                            <option value="1">Exaver 1</option>
                            <option value="2">Exaver 2</option>
                            <option value="3">Exaver 3</option>
                            <option value="4">Edicion</option>
                            <option value="5">Coordinacion</option>
                        </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                </div>
                <div class="col">
                    <input type="hidden" name="idUsuarioAsigno" id="idUsuarioAsigno" class="form-control" placeholder="User Assigned" value="<?php echo $_SESSION['id']; ?>">
                </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Ok">
      </div>
        </form>
      </div>
    </div>
  </div>
</div-->

<!-- Modal -->
<!--div class="modal fade" id="ModalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="Agregar/Agregar_Perfil.php" method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" name="idUsuario" class="form-control" placeholder="User">
                </div>
                <div class="col">
                <label for="idPerfil">Profile</label>
                        <select class="form-control" id="idPerfil" name="idPerfil">
                            <option value="0">--Selecciona una opción---</option>  
                            <option value="1">TL</option>
                            <option value="2">IW</option>
                            <option value="3">P</option>
                            <option value="4">ED</option>
                            <option value="5">CO</option>
                            <option value="6">D</option>
                        </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <input type="datetime-local" name="fechaHora" class="form-control" placeholder="DateTime">
                </div>
                <div class="col">
                    <input type="text" name="idUsuarioAsigno" class="form-control" placeholder="User Assigned">
                </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Ok">
      </div>
        </form>
      </div>
    </div>
  </div>
</div> <br> <br-->
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">        
                                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Id</th>
                                            <th>Usuario</th>
                                            <th>Equipo</th>
                                            <th>Perfil</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                            
                                        foreach($data as $dat) {                                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $dat['id'] ?></td>
                                            <td><?php echo $dat['nombreUsuario'] ?></td>
                                            <td><?php echo $dat['nombreEquipo'] ?><input id="teamID" name="teamId" type="hidden" value="<?php echo $dat['idEquipo'] ?>"></td>
                                            <td><?php echo $dat['nombrePerfil'] ?><input id="profID" name="profId" type="hidden" value="<?php echo $dat['idPerfil'] ?>"></td>  
                                            <td></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>                                
                                    </tbody>        
                                </table>                    
                                </div>
                            </div>
                    </div>  
                </div>

                <!--Modal para Actualizar Equipo-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="row">
                <div class="col">
                    <input type="text" id="nombre" class="form-control" placeholder="Name" required>
                    <input type="hidden" id="nombrePerfilE" class="form-control">
                </div>
                </div> <br>

               <div class="row">
                <div class="col">
                    <label for="idEquipo">Team</label>
                        <select class="form-control" id="idEquipo">
                            <option value="0">--Selecciona una opción---</option>  
                            <option value="1">Exaver 1</option>
                            <option value="2">Exaver 2</option>
                            <option value="3">Exaver 3</option>
                            <option value="4">Edicion</option>
                            <option value="5">Coordinacion</option>
                        </select>
                </div>
            </div>           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>

<!--Modal para Actualizar Perfil-->
<div class="modal fade" id="modalActualizarPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPerfil">    
            <div class="modal-body">
                <div class="row">
                <div class="col">
                    <input type="text" id="nombrePerfil" class="form-control" placeholder="Name"  required>
                    <input type="hidden" id="nombreEquipoP" class="form-control">
                </div>
                </div> <br>

               <div class="row">
                <div class="col">
                    <label for="idPerfil">Profile</label>
                        <select class="form-control" id="idPerfil">
                            <option value="0">--Selecciona una opción---</option>  
                            <option value="1">TL</option>
                            <option value="2">IW</option>
                            <option value="3">P</option>
                            <option value="4">ED</option>
                            <option value="5">CO</option>
                            <option value="6">D</option>
                        </select>
                </div>
            </div>           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>

<!-- Modal para agregar equipo -->
<div class="modal fade" id="ModalEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Agregar/Agregar_Equipo.php" method="POST">
            <div class="row">
                <div class="col">
                    <input type="hidden" name="idUsuarioModalEquipo" id="idUsuarioModalEquipo" class="form-control" placeholder="User">
                </div>
                </div>
                <div class="col">
                
                </div>
            
            <div class="row">
                <div class="col">
                <label for="idEquipo">Team</label>
                        <select class="form-control" id="idEquipo" name="idEquipo">
                            <option value="0">--Selecciona una opción---</option>  
                            <option value="1">Exaver 1</option>
                            <option value="2">Exaver 2</option>
                            <option value="3">Exaver 3</option>
                            <option value="4">Edicion</option>
                            <option value="5">Coordinacion</option>
                        </select>
                </div>
                <div class="col">
                    <input type="hidden" name="idUsuarioAsigno" id="idUsuarioAsigno" class="form-control" placeholder="User Assigned" value="<?php echo $_SESSION['id']; ?>">
                </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Ok">
      </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal para agregar perfil -->
<div class="modal fade" id="ModalPerfilAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Agregar/Agregar_Perfil.php" method="POST">
            <div class="row">
                <div class="col">
                    <input type="hidden" name="idUsuarioModalPerfil" id="idUsuarioModalPerfil" class="form-control" placeholder="User">  
                </div>
            </div>
                <div class="col">
                </div>
            <div class="row">
                <div class="col">
                <label for="idPerfil">Profile</label>
                        <select class="form-control" id="idPerfil" name="idPerfil">
                        <option value="0">--Selecciona una opción---</option>  
                            <option value="1">TL</option>
                            <option value="2">IW</option>
                            <option value="3">P</option>
                            <option value="4">ED</option>
                            <option value="5">CO</option>
                            <option value="6">D</option>
                        </select>
                </div>
                <div class="col">
                    <input type="hidden" name="idUsuarioAsigno" id="idUsuarioAsigno" class="form-control" placeholder="User Assigned" value="<?php echo $_SESSION['id']; ?>">
                </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Ok">
      </div>
        </form>
      </div>
    </div>
  </div>
</div>


                   



                    
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!--h1 class="h3 mb-2 text-gray-800">Tables</h1-->
                    <!--p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p-->

                            <div style="padding: 10px">
                                <a href="#"> <button type="button" class="btn btn-primary">New Part</button></a>
                            </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Parts of Paper 1</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Funcion</th>
                                        </tr>
                                    </thead>
                                     <?php
                                        $conexion = mysqli_connect('localhost', 'root', '123456', 'exaver1');
                                        $sql="SELECT *  FROM paper1;";
                                        $result=mysqli_query($conexion, $sql);

                                        while($mostrar=mysqli_fetch_array($result))
                                        {
                                        
                                        echo "<tr>";
                                            echo "<td>"; echo $mostrar["idPaper"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["nombre"]; echo "</td>";
                                            echo "<td>

                                        <a href='#.php?idPaper=".$mostrar['idPaper']."'><button class='btn btn-primary' type='button' data-toggle='modal' data-target='#exampleModal'><i class='fas fa-edit'></i></button></a>

                                        <a href='#.php?idPaper=".$mostrar['idPaper']."'> <button type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></button></a>

                                                 </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!--h1 class="h3 mb-2 text-gray-800">Tables</h1-->
                    <!--p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p-->

                            <div style="padding: 10px">
                                <a href="#"> <button type="button" class="btn btn-primary">New Profile</button></a>
                            </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Profiles</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Funcion</th>
                                        </tr>
                                    </thead>
                                     <?php
                                        $conexion = mysqli_connect('localhost', 'root', '123456', 'exaver1');
                                        $sql="SELECT *  FROM perfiles;";
                                        $result=mysqli_query($conexion, $sql);

                                        while($mostrar=mysqli_fetch_array($result))
                                        {
                                        
                                        echo "<tr>";
                                            echo "<td>"; echo $mostrar["idPerfil"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["nombre"]; echo "</td>";
                                            echo "<td>

                                        <a href='#.php?idPerfil=".$mostrar['idPerfil']."'><button class='btn btn-primary' type='button' data-toggle='modal' data-target='#exampleModal'><i class='fas fa-edit'></i></button></a>

                                        <a href='#.php?idPerfil=".$mostrar['idPerfil']."'> <button type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></button></a>

                                                 </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                    
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
               
        <script>
        $(document).on("click", ".open-AddBookDialog", function () {
        var myBookId = $(this).data('id');
        alert(myBookId);
        $.ajax({      
            url: "Consulta/Consulta_Usuario.php",      
            method: "POST",      
            data: { userid: myBookId },      
            dataType: "json",      
            success: function(data) {        
                $("#nombre").val(data.nombre);        
                $("#correo").val(data.correo);
                $("#usuario").val(data.usuario); 
                $("#password").val(data.password); 
                $("#telefono").val(data.telefono);
                $("#estatus").val(data.estatus);
                $("#idEquipo").val(data.idEquipo);
                $("#idPerfil").val(data.idPerfil);                   
                //$("#add").val("Update");        
                $("#actualizar").modal("show");      
                   
                if(data.status){ alert("Si");  }
                else 
                {
                alert("no");
                }
            } 
                });
        });
        </script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
         <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main2.js"></script>  
    </body>
</html>
