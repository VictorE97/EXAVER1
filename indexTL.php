<?php

    session_start();

    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }

    $nombre = $_SESSION['nombre'];

?>

<?php
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT partes.idParte, partes.nombre AS nombreParte,
t3.idRol, t3.nombre AS nombreRolEdita, t5.id, t5.nombre AS nombreUsuarioEdita,
t4.idRol, t4.nombre AS nombreRolRevisa, t6.id, t6.nombre AS nombreUsuarioRevisa,
partes.paper 
FROM partes
INNER JOIN examen_parte
ON partes.idParte = examen_parte.idParte
INNER JOIN examenes
ON examenes.idExamen = examen_parte.idExamen
INNER JOIN version
ON version.idVersion = examenes.idVersion
INNER JOIN equipo_version
ON equipo_version.idVersion = version.idVersion
INNER JOIN usuarios_equipo
ON usuarios_equipo.idEquipo = equipo_version.idEquipo 
INNER JOIN usuarios_perfiles
ON usuarios_equipo.idUsuario = usuarios_perfiles.idUsuario
LEFT JOIN (select * from usuarios_examen_parte INNER JOIN partes ON usuarios_examen_parte.idexamen_parte = partes.idParte WHERE usuarios_examen_parte.rol = '1') AS t1
ON t1.idexamen_parte = partes.idParte
LEFT JOIN (select * from usuarios_examen_parte INNER JOIN partes ON usuarios_examen_parte.idexamen_parte = partes.idParte WHERE usuarios_examen_parte.rol = '2') AS t2
ON t2.idexamen_parte = partes.idParte
LEFT JOIN roles t3
ON t1.rol = t3.idRol
LEFT JOIN roles t4
ON t2.rol = t4.idRol
LEFT JOIN usuarios t5
ON t1.idUsuario = t5.id
LEFT JOIN usuarios t6
ON t2.idUsuario = t6.id
WHERE usuarios_perfiles.idUsuario = '12' AND examenes.nivel = '3' group by partes.idParte";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
$query=mysqli_query($conexion,"SELECT * FROM bd_final.usuarios;");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">EXAVER</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>              

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="width: 300px;">
                                    <div class="card-body">Marina Betancourt Cruz</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4" style="width: 300px; margin-left:112.5px;">
                                    <div class="card-body">Victoria Ellen Schlegel</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4" style="width: 300px; margin-left:225px;">
                                    <div class="card-body">Teresa de Jesús Romero Barradas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Agregar/UsuariosExamenParte.php" method="POST">
            <div class="row">
                <div class="col">
                    <label for="idUsuario">User</label>
                                    <select class="form-control" id="idUsuario" name="idUsuario">
                                            <?php while($datos = mysqli_fetch_array($query))
                                            {
                                                ?>
                                                <option value="<?php echo $datos['id']?>"><?php echo $datos['nombre']?></option>
                                            <?php
                                            }
                                                ?>
                                    
                                    </select>
                </div>
                <input type="text" class="form-control" name="idexamen_parte" id="idexamen_parte" placeholder="Part">
                <div class="col">
                <label for="rol">Rol</label>
                                    <select class="form-control" id="rol" name="rol">
                                            <option value="1">Elaborador</option>
                                            <option value="2">Revisor</option>
                                    </select>
                </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>IdParte</th>
                                                <th>NomParte</th>
                                                <th>Elabora</th>
                                                <th>Revisa</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>IdParte</th>
                                                <th>NomParte</th>
                                                <th>Elabora</th>
                                                <th>Revisa</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php                            
                                        foreach($data as $dat) {                                                        
                                        ?>
                                            <tr>
                                                <td><?php echo $dat['idParte'] ?></td>
                                                <td><?php echo $dat['nombreParte'] ?></td>
                                                <?php
                                                    if(!is_null($dat['nombreUsuarioEdita'])){?>
                                                        <td><?php echo $dat['nombreUsuarioEdita'] ?></td>
                                                 <?php   }else{?>
                                                 <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                        Elabora
                                                     </button></td>
                                                 <?php }
                                                ?>
                                                <?php
                                                    if(!is_null($dat['nombreUsuarioRevisa'])){?>
                                                        <td><?php echo $dat['nombreUsuarioRevisa'] ?></td>
                                                 <?php   }else{?>
                                                 <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                        Revisa
                                                     </button></td>
                                                 <?php }
                                                ?>
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
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script type="text/javascript" src="main3.js"></script>
    </body>
</html>
