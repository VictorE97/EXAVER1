<?php

    session_start();

    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }

    $nombre = $_SESSION['nombreUsuario'];
    //$tipo_equipo = $_SESSION['idEquipo'];
    //$tipo_perfil = $_SESSION['idPerfil'];

?>

<?php
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM version";
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
    </head>
    <body class="sb-nav-fixed">
    <?php include ('Menu/Navbar.php'); ?>
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
                    <div class="row">
                        <div class="col-lg-12">            
                        <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nueva Version</button>    
                        </div>    
                    </div>    
                </div> <br>

                <div class="container">
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">        
                                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Termino</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                            
                                        foreach($data as $dat) {                                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $dat['idVersion'] ?></td>
                                            <td><?php echo $dat['nombre'] ?></td>
                                            <td><?php echo $dat['fechaInicio'] ?></td>
                                            <td><?php echo $dat['fechaTermino'] ?></td>    
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
                                    <input type="text" id="nombre" class="form-control" placeholder="Nombre" required>
                                </div>
                                </div> <br>
                                
                                <div class="row">
                                <div class="col">
                                    <label for="">Fecha Creacion</label>
                                    <input type="date" id="fechaInicio" class="form-control" placeholder="Start Date" required>
                                </div>
                                <div class="col">
                                    <label for="">Fecha Termino</label>
                                    <input type="date" id="fechaTermino" class="form-control" placeholder="End date" required>
                                </div>
                                </div> <br>           
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                            </div>
                        </form>    
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
        <script type="text/javascript" src="main1.js"></script>
    </body>
</html>
