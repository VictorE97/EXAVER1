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

$consulta = "SELECT idExamen, examenes.nombre, nivel, fechaCreacion, version.nombre as nombreVersion FROM examenes
INNER JOIN version
ON version.idVersion = examenes.idVersion";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<?php

$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
$query=mysqli_query($conexion,"SELECT * FROM version");

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
                        <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">New Exam</button>    
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
                                            <th>Name</th>
                                            <th>Level</th>
                                            <th>Version</th>
                                            <th>Creation date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                            
                                        foreach($data as $dat) {                                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $dat['idExamen'] ?></td>
                                            <td><?php echo $dat['nombre'] ?></td>
                                            <td><?php echo $dat['nivel'] ?></td>
                                            <td><?php echo $dat['nombreVersion'] ?></td>
                                            <td><?php echo $dat['fechaCreacion'] ?></td>    
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
                        <form action="Agregar/AgregarExamen.php" method="POST">    
                            <div class="modal-body">
                                <div class="row">
                                <div class="col">
                                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Name" required>
                                </div>
                                </div> <br>
                                
                                <div class="row">
                                <div class="col">
                                <label for="exampleFormControlSelect1">Select level</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="nivel">
                                    <option value="0">"Select level"</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col">
                                <label for="idVersion">Select the version</label>
                                    <select class="form-control" id="idVersion" name="idVersion">
                                            <?php while($datos = mysqli_fetch_array($query))
                                            {
                                                ?>
                                                <option value="<?php echo $datos['idVersion']?>"><?php echo $datos['nombre']?></option>
                                            <?php
                                            }
                                                ?>
                                    
                                    </select>
                                    
                                    <!--input type="text" id="version" name="idVersion" class="form-control" placeholder="version" required-->
                                </div>
                                </div> <br>           
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                <button type="submit" id="btnGuardar" class="btn btn-dark">Keep</button>
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

$("#idVersion").change(function () {

ajaxObj = $.ajax({
    url: 'YourURL',
    type: 'POST', // You can use GET
    data: 'parameter1=value1',
    dataType: "json",
    context: this,                
    success: function (data) {
        json: data              
    },
    error: function (request) {
        $(".return-json").html("Some error!");
    }
});

json_obj = $.parseJSON(ajaxObj.responseText);            

var options = $("#selector");
options.empty();
options.append(new Option("-- Select --", 0));
$.each(ajx_obj, function () {
    options.append(new Option(this.text, this.value));
});
});
});

        </script>
               
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
