<?php

    session_start();

    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }

    $nombre = $_SESSION['nombreUsuario'];

?>

<?php
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT partes.idParte, partes.nombre AS nombreParte,
t3.idRol, t3.nombre AS nombreRolEdita, t5.id, t5.nombre AS nombreUsuarioEdita,
t4.idRol, t4.nombre AS nombreRolRevisa, t6.id, t6.nombre AS nombreUsuarioRevisa,
partes.paper, t1.idusuarios_examen_parte AS idElabora, t2.idusuarios_examen_parte AS idRevisa 
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
WHERE usuarios_perfiles.idUsuario = '15' AND examenes.nivel = '1' group by partes.idParte";
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
                                    <div class="card-body">Anabel Gutiérrez Rodríguez</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4" style="width: 300px; margin-left:112.5px;">
                                    <div class="card-body">Enrique Chapúz Tiquet</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4" style="width: 300px; margin-left:225px;">
                                    <div class="card-body">Guillermo Huerta Gutiérrez</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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
                                    <table class="table table-bordered" id="tablaUsuarios_examen_parte" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>IdParte</th>
                                                <th>NomParte</th>
                                                <th>Elabora</th>
                                                <th>Revisa</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>IdParte</th>
                                                <th>NomParte</th>
                                                <th>Elabora</th>
                                                <th>Revisa</th>
                                                <th>Acciones</th>
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
                                                        <td><input type="hidden" value="<?php echo $dat['idElabora'] ?>"><?php echo $dat['nombreUsuarioEdita'] ?></td>
                                                 <?php   }else{?>
                                                 <td></td>
                                                 <?php }
                                                ?>
                                                <?php
                                                    if(!is_null($dat['nombreUsuarioRevisa'])){?>
                                                        <td><input type="hidden" value="<?php echo $dat['idRevisa'] ?>"><?php echo $dat['nombreUsuarioRevisa'] ?></td>
                                                 <?php   }else{?>
                                                 <td></td>
                                                 <?php }
                                                ?>
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

                        <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formElaborador">    
            <div class="modal-body">
                <div class="row">
                <div class="col">
                    <input type="text" id="nombre" class="form-control" placeholder="Name" required>
                    <!--input type="hidden" id="nombrePerfilE" class="form-control"-->
                </div>
                </div> <br>

               <div class="row">
                <div class="col">
                <label for="idUsuario">Name User</label>
                    <select class="form-control" name="idUsuario" id="idUsuario">
                    <?php 
                    $conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
                    $query=mysqli_query($conexion,"SELECT usuarios.id, usuarios.nombre AS nombreUsuarios, equipo.idEquipo, equipo.nombre AS nombreEquipo FROM usuarios_equipo 
                    INNER JOIN equipo
                    ON equipo.idEquipo = usuarios_equipo.idEquipo
                    INNER JOIN usuarios
                    ON usuarios.id = usuarios_equipo.idUsuario
                    WHERE usuarios_equipo.idEquipo = '1';");
                    while($datos = mysqli_fetch_array($query))
                                            {
                                                ?>
                                                <option value="<?php echo $datos['id']?>"><?php echo $datos['nombreUsuarios']?></option>
                                            <?php
                                            }
                                                ?>
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

<!-- Modal para agregar quien elabora -->
<div class="modal fade" id="ModalElabora" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Elaborates</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Agregar/AgregarElaborador.php" method="POST">
            <div class="row">
                <div class="col">
                <label for="idUsuario">Name User</label>
                    <select class="form-control" name="idUsuario" id="idUsuario">
                    <?php 
                    $conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
                    $query=mysqli_query($conexion,"SELECT usuarios.id, usuarios.nombre AS nombreUsuarios, equipo.idEquipo, equipo.nombre AS nombreEquipo FROM usuarios_equipo 
                    INNER JOIN equipo
                    ON equipo.idEquipo = usuarios_equipo.idEquipo
                    INNER JOIN usuarios
                    ON usuarios.id = usuarios_equipo.idUsuario
                    WHERE usuarios_equipo.idEquipo = '1';");
                    while($datos = mysqli_fetch_array($query))
                                            {
                                                ?>
                                                <option value="<?php echo $datos['id']?>"><?php echo $datos['nombreUsuarios']?></option>
                                            <?php
                                            }
                                                ?>
                    </select>
                    <!--input type="text" name="idParteModalModalElaborador" id="idParteModalElaborador" class="form-control" placeholder="User"-->
                </div>
                <div class="col">
                    <input type="hidden" name="idexamen_parteModal" id="idexamen_parteModal" class="form-control">
                    <!--input type="hidden" name="idUsuarioAsigno" id="idUsuarioAsigno" class="form-control" placeholder="User Assigned" value="<!?php echo $_SESSION['id']; ?>"-->
                </div>
            </div> <br>
            <div class="row">
               <div class="col">
                    <input type="hidden" class="form-control" name="rol" value="1">
               </div>
               <div class="col">
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

<!-- Modal para agregar revisor -->
<div class="modal fade" id="ModalRevisor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Check out</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Agregar/AgregarRevisor.php" method="POST">
            <div class="row">
                <div class="col"><label for="idUsuario">Name User</label>
                    <select class="form-control" name="idUsuario" id="idUsuario">
                    <?php
                    $conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
                    $query=mysqli_query($conexion,"SELECT usuarios.id, usuarios.nombre AS nombreUsuarios, equipo.idEquipo, equipo.nombre AS nombreEquipo FROM usuarios_equipo 
                    INNER JOIN equipo
                    ON equipo.idEquipo = usuarios_equipo.idEquipo
                    INNER JOIN usuarios
                    ON usuarios.id = usuarios_equipo.idUsuario
                    WHERE usuarios_equipo.idEquipo = '1';"); 
                    while($datos = mysqli_fetch_array($query))
                                            {
                                                ?>
                                                <option value="<?php echo $datos['id']?>"><?php echo $datos['nombreUsuarios']?></option>
                                            <?php
                                            }
                                                ?>
                    </select>
                    <!--input type="hidden" name="idUsuarioModalPerfil" id="idUsuarioModalPerfil" class="form-control" placeholder="User"-->  
                </div>
                <div class="col">
                    <input type="hidden" name="idexamen_parteModalRevisor" id="idexamen_parteModalRevisor" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col">
                    <input type="hidden" class="form-control" name="rol" value="2">
                    <!--input type="hidden" name="idUsuarioAsigno" id="idUsuarioAsigno" class="form-control" placeholder="User Assigned" value="<!?php echo $_SESSION['id']; ?>"-->
                </div>
                <div class="col">
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
        <script type="text/javascript" src="main4.js"></script>
    </body>
</html>
