<?php 
 include '../funcionesphp/bd.php';
 include '../funcionesphp/sessiones.php';

 
?>
<!DOCTYPE html>
<!-- saved from url=(0067)http://www.test.exaver.com/exaver/Examenes/InformacionExamenes.html -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body><header>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exaver | Resultados</title>
    
  
    
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="../CSS/styles.css" />
      <link rel="stylesheet" href="../CSS/inicio.css" />
      <link rel="stylesheet" href="../CSS/colores.css" />
      <link rel="stylesheet" href="../CSS/MenuLateral.css" />
      <link rel="stylesheet" href="../CSS/botones.css" />
      <!-- Bootstrap CSS -->
       <!-- Custom styles for this template -->
    <link href="../CSS/exaver3.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

    <style>
        body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

            .header{
            
            padding: 10px 10px;
            color: black;
            text-align: center;
            font-size: 20px; 
            font-weight: bold;
            position: fixed;
            top: 0;
            width: 100%;
            transition: 0.2s;
            }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        
    </style>
    <style>
body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

#header {
    background-color: while;
  padding: 50px 10px;
  color: black;
  text-align: center;
  font-size: 20px; 
  font-weight: bold;
  position: fixed;
  top: 0;
  width: 100%;
  transition: 0.2s;
}
</style>
    
   
</header>
<?php
         
         $Writing=0;
         $Reading=0;
         $Listening=0;
         $puntos_Paper1=0;
         $puntos_Paper2=0;

            
         $usuId = $_SESSION['id_user'];
         $examenid = $_SESSION['id_examen_GET'];
         $id_Parte =$_SESSION['id_parteProg_GET'];//
         $id_intentos    =$_SESSION['id_intentos_GET'];// id de los intentos de examen

         $LimitePre =180;
         $contador=121;
       

          

       
            $sql               = "SELECT * FROM usuarios WHERE Usuario_id = ' $usuId'";
            $resultado         = $conn->query($sql);
            $Resp1             = $resultado->fetch_assoc();
            $NameUser = $Resp1['Us_usuario'];

            //obtener la fecha
            $sql               = "SELECT * FROM tiempo WHERE Id_Intentos = '$id_intentos'
            AND paper_Examen='1'";
            $resultado         = $conn->query($sql);
            $Resp1             = $resultado->fetch_assoc();
            $anio = $Resp1['anio_Inicio'];
            $mes = $Resp1['mes_Inicio'];
            $dia = $Resp1['dia_Inicio'];


            //conteo de puntos 
            $PuntosTotal=0;
            while($contador<=$LimitePre){
               $sql = "SELECT * FROM respuestas_usuario WHERE Usuarios_Usuario_id = '$usuId'
               AND id_intentos_Us='$id_intentos'
               AND Examen_Exa_id='$examenid' 
               AND Respuestas_Res_id= '$contador'";
         
               
               $resultado        = mysqli_query($conn, $sql);
               $Resp1              = $resultado->fetch_assoc();
               if (!empty($Resp1))  {
                   $Puntos = $Resp1['Resu_pre_puntuacion'];
               }else{
                   $Puntos=0;
               }
               
               
               $PuntosTotal=$PuntosTotal+$Puntos;
               
              
               $contador=$contador+1;
         
            }

            ///obtener los tiempos totales 
            $horTotal=0;
            $sql               = "SELECT * FROM tiempo WHERE Id_Intentos = '$id_intentos'
            AND paper_Examen='1'";
            $resultado         = $conn->query($sql);
            $Resp1             = $resultado->fetch_assoc();
            $Min1 = $Resp1['Minutos_Fin'];
            $Seg1 = $Resp1['Seg_Fin'];
            $Hor1 = $Resp1['Hora_Fin'];
            
        
            if($Min1<10){
                $Min1="0".$Min1;
            }
            if($Seg1<10){
                $Seg1="0".$Seg1;
            }
            //verifiacar la sesion abierta con el estatus
          $sql              = "SELECT * FROM puntos_usuario WHERE id_Usuario = '$usuId' 
          AND  id_intentos_Us='$id_intentos'";
          $resultado        = mysqli_query($conn, $sql);
          $Res              = $resultado->fetch_assoc();
          if (!empty($Res)) {////la consulta regresa el registro
                      $sql             = "UPDATE puntos_usuario SET puntos_Parte1='$PuntosTotal' 
                      WHERE id_Usuario ='$usuId'
                      AND  id_intentos_Us='$id_intentos'";
                      if ( mysqli_query( $conn, $sql ) )
                         {
                         $consultasql = 'exito';
                         } //mysqli_query( $conn, $sql )
                      else
                         {
                         $consultasql = 'null';
                         }
          
          
          } else {//NO REGRESA NADA ENTONCES INGRESO NUEVO
             $sql = "INSERT INTO puntos_usuario (id, id_Usuario, descripcion, id_intentos_Us, puntos_Parte1) 
             VALUES (NULL, '$usuId', 'puntajes', '$id_intentos', '$PuntosTotal')";
                 if (mysqli_query($conn, $sql)) {
                                 $consultasql = 'exito';
                 } else {
                                 $consultasql = 'null';
                 }
                 
          }

         
         
         ?>

<!-- encabezado -->


    <!-- Boton Consultar -->
    <div id="header"  class="navbar container header">
        <nav class="a navbar navbar-expand-lg fixed-top container">
            <a class="navbar-brand" >
                <img id="img_logo"  src="../imagenes/logo.png" width="140" height="85" class="d-inline-block align-top" alt="">
            </a>
            
            <p><?php echo $NameUser ?></p>
           
           
            <div class="border-bottom"></div>
            <!-- Menu navbar -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">

                
              
            </div>  <!--contenedor menu -->

          
         </nav>
    </div>



    <div id="main-content" class="container">
        
       
       
        
        <br><br>
        <h4 class="display-6" style="color:#003c64;">Score</h4>
        <table class="table table-bordered text-center egt" style="justify-content:center;width:70%;">
            <tbody>
                <tr>
                    <td>Date</td>
                    <td>Exam</td>
                    <td>Paper</td>
                    <td>Time Paper</td> 
                    <td>Your time</td>
                    <td>Score</td>
                    <td>Final Score</td>
                </tr>
                <tr style="background-color: rgba(179, 179, 179, 0.205);">
                    <td rowspan="2"><?php echo $dia ?>/<?php echo $mes ?>/<?php echo $anio ?></td>
                    <td rowspan="2">EXAVER 3</td>
                    <td>One</td>
                    <td>1 hr. 15 min. aprox.</td>
                    <td><?php echo $Hor1 ?> :<?php echo $Min1 ?> : <?php echo $Seg1 ?></td>
                    <td><?php echo $PuntosTotal ?>/60</td>
                    <td rowspan="2">--</td>
                </tr>
                <tr style="background-color: rgba(179, 179, 179, 0.205);">
                    <td>Two</td>
                    <td>30 min. aprox.</td>
                    <td>--</td>
                    <td>--</td>
                    
                </tr>
            </tbody>
       </table>
            
                    </section>

        <br>
        <br>
        <br>
        <section>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
               
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div>
                    <a
                                 class="btn btn-info botonSig2"
                                 href="../funcionesphp/buscarParteidUs.php"
                                 role="button"
                                 >
                                 <p>Continue paper two</p>
                              </a
                                 >
                    </div>
                    <br>
                        <div>
                        <a
                                    class="btn btn-info botonSig2"
                                    href="../html/inicio"
                                    role="button"
                                    >
                                    <p>EXAVER home</p>
                                 </a
                                    >
                        </div>
                </div>
            </div>
        </section>
       
        

        

    </div>
   

    <!--Pie de página-->
    <footer class="con container-fluid mt-5 pb-3" style=" position: absolute;">
            <div class="container pt-3">
               
              
               
                <footer class=text-center>
                       
                        <a class="text" style="color:rgb(207, 205, 205); text-size-adjust:5px;">© 2020 EXAVER – Exámenes de Certificación de Lengua Inglesa. Universidad Veracruzana. All Rights Reserved.</a>
                        

                </footer>
            </div>
   </footer>
   

</body>
<script>
// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.fontSize = "15px";
    document.getElementById("img_logo").width = "70";
    document.getElementById("img_logo").height = "50";
  } else {
    document.getElementById("header").style.fontSize = "20px";
    document.getElementById("img_logo").width = "160";
    document.getElementById("img_logo").height = "100";
  }
}
</script>

</html>
