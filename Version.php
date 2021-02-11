<?php

    session_start();

    if(!isset($_SESSION['idUsuario'])){
        header("Location: login.php");
    }

    $nombre = $_SESSION['nombre'];
    $tipo_equipo = $_SESSION['idEquipo'];
    $tipo_perfil = $_SESSION['idPerfil'];

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
                            
                            <?php if($tipo_perfil == 5) { ?>
                            
                            <div class="sb-sidenav-menu-heading">Gestion</div>
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
                            </div>


                        <?php } ?>         
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
                    <div class="container-fluid">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        New Version
                    </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Version</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="Agregar/Agregar Version.php">
            <div class="row">
                <div class="col">
                    <input type="text" name="nombre" class="form-control" placeholder="Start Date " required>
                </div>
                <div class="col">
                    <input type="text" name="correo" class="form-control" placeholder="Finish Date" required>
                </div>
            </div> <br>
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Team</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="idEquipo">
                            <option value="0">--Selecciona una opción---</option>  
                            <option value="1">Exaver 1</option>
                            <option value="2">Exaver 2</option>
                            <option value="3">Exaver 3</option>
                            <option value="4">Edicion</option>
                            <option value="5">Coordinacion</option>
                        </select>
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1">Profile</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="idPerfil">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="Submit" class="btn btn-primary" name="" value="Register User">
        <!--button type="button" class="btn btn-primary">Save changes</button-->
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="Agregar/Agregar Usuario.php">
        <input type="hidden" name="idUsuario" value="<?php echo $_GET['idUsuario'] ?>">
            <div class="row">
                <div class="col">
                    <input type="text" name="nombre" class="form-control" placeholder="Name" value="<?php echo $consulta["0"]; ?>" required>
                </div>
                <div class="col">
                    <input type="text" name="correo" class="form-control" placeholder="E-mail" required>
                </div>
            </div> <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="usuario" class="form-control" placeholder="User" required>
                </div>
                <div class="col">
                    <input type="text" name="password" class="form-control" placeholder="Password" required>
                </div>
            </div> <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="telefono" class="form-control" placeholder="Phone" required>
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="estatus">
                          <option>Activo</option>
                          <option>Inactivo</option>
                        </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Team</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="idEquipo">
                            <option value="0">--Selecciona una opción---</option>  
                            <option value="1">Exaver 1</option>
                            <option value="2">Exaver 2</option>
                            <option value="3">Exaver 3</option>
                            <option value="4">Edicion</option>
                            <option value="5">Coordinacion</option>
                        </select>
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1">Profile</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="idPerfil">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="Submit" class="btn btn-primary" name="" value="Register User">
        <!--button type="button" class="btn btn-primary">Save changes</button-->
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Termino</th>
                                            <th>Funciones</th>
                                        </tr>
                                    </thead>
                                     <?php
                                        $conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
                                        $sql="SELECT * FROM version";
                                        $result=mysqli_query($conexion, $sql);

                                        while($mostrar=mysqli_fetch_array($result))
                                        {
                                        
                                        echo "<tr>";
                                            echo "<td>"; echo $mostrar["idVersion"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["nombre"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["fechaInicio"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["fechaTermino"]; echo "</td>";
                                            echo "<td>
                                           
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
                </div>
                <div class="container-fluid">

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
    </body>
</html>
