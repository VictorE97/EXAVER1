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
            background-color: while;
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
         $ParteUs =$_SESSION['id_parteProg_GET'];//
         $id_intentos    =$_SESSION['id_intentos_GET'];// id de los intentos de examen
         $LimitePre =205;
         $contador=121;
         
///para terminar la parte de intentos
         $sql             = "UPDATE intentos_reg_usu SET  Estatus='1'
         WHERE Usuarios_Usuario_id ='$usuId'
         AND  id_Examen='$examenid'
         AND  Iru_id='$id_intentos'";
            if ( mysqli_query( $conn, $sql ) ) {
               $consultasql = 'exito';
               
            } //mysqli_query( $conn, $sql )
            else {
               $consultasql = 'null';
            }
           

       
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
               if($contador==140){
                  $Reading=$PuntosTotal;
                  
               }
               if($contador==180){
                  $Writing=$PuntosTotal-$Reading;
                  $puntos_Paper1=$PuntosTotal;
               }
               if($contador==205){
                  $Listening=$PuntosTotal-$Reading-$Writing;
                  $puntos_Paper2=$PuntosTotal- $puntos_Paper1;
               }
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
            $sql               = "SELECT * FROM tiempo WHERE Id_Intentos = '$id_intentos'
            AND paper_Examen='2'";
            $resultado         = $conn->query($sql);
            $Resp1             = $resultado->fetch_assoc();
            $Min2 = $Resp1['Minutos_Fin'];
            $Seg2 = $Resp1['Seg_Fin'];
            $Hor2 = $Resp1['Hora_Fin'];
        

            $horTotal=$Hor1+$Hor2;
            $MinTotal=$Min1+$Min2;
            $SegTotal=$Seg1+$Seg2;

            if($SegTotal>59){
                $MinTotal=$MinTotal+1;
                $SegTotal=$SegTotal-60;
            }
            if($MinTotal>59){
                $horTotal=$horTotal+1;
                $MinTotal=$MinTotal-60;
            }

            if($MinTotal<10){
                $MinTotal="0".$MinTotal;
            }
            if($SegTotal<10){
                $SegTotal="0".$SegTotal;
            }
            if($Min1<10){
                $Min1="0".$Min1;
            }
            if($Seg1<10){
                $Seg1="0".$Seg1;
            }
            if($Min2<10){
                $Min2="0".$Min2;
            }
            if($Seg2<10){
                $Seg2="0".$Seg2;
            }
            
            

         
         
         ?>




    <!-- Boton Consultar -->
    <div id="header" class="navbar container header"><!-- encabezado -->
         <nav class="a navbar navbar-expand-lg fixed-top container">
                    <a class="navbar-brand" >
                        <img id="img_logo"  src="../imagenes/logo.png" width="140" height="85" class="d-inline-block align-top" alt="">
                    </a>
                <p><?php echo $NameUser ?></p>
                <div class="border-bottom"></div>
                    <!-- Menu navbar -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">

                
         </nav>
    </div><!-- encabezado -->



    <div id="main-content" class="container">
        
       
       <br><br><br>
        
        
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
                    <td><?php echo $Hor1 ?> : <?php echo $Min1 ?> : <?php echo $Seg1 ?></td>
                    <td><?php echo $puntos_Paper1 ?>/60</td>
                    <td rowspan="2"><?php echo $PuntosTotal ?>/85</td>
                </tr>
                <tr style="background-color: rgba(179, 179, 179, 0.205);">
                    <td>Two</td>
                    <td>30 min. aprox.</td>
                    <td><?php echo $Min2 ?> : <?php echo $Seg2 ?></td>
                    <td><?php echo $puntos_Paper2 ?>/25</td>
                    
                </tr>
            </tbody>
       </table>
            
                    </section>

        
        <br><br>
        <h4 class="display-6" style="color:#003c64;">Results per ability</h4>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-6">
                <div style=" width: 100%; height: 30%">
                    
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            
        </div>

        <section>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
               
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
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
                    <br>
                        <div>
                        <a
                                 class="btn btn-info botonSig2"
                                 href="../html/index.php"
                                 role="button"
                                 >
                                 <p>Exit</p>
                              </a
                                 >
                        </div>
                </div>
            </div>
        </section>

    </div>
   

    <!--Pie de página-->
    <footer class="con container-fluid mt-5 pb-3">
            <div class="container pt-3">
               
              
               
                <footer class=text-center>
                       
                        <a class="text" style="color:rgb(207, 205, 205); text-size-adjust:5px;">© 2020 EXAVER – Exámenes de Certificación de Lengua Inglesa. Universidad Veracruzana. All Rights Reserved.</a>
                        

                </footer>
            </div>
   </footer>
   <script>//bar, pie, doughnut
         var ctx= document.getElementById("myChart").getContext("2d");
         const Reading1 = "<?php echo $Reading ?>";
         const Writing1="<?php echo  $Writing ?>";
         const Listenig1="<?php echo  $Listening ?>";
         const Reading = Reading1 * 1.1764705882352;
         const Writing = Writing1 * 1.1764705882352;
         const Listenig = Listenig1 * 1.1764705882352;
         
         
         var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
   data:{
   labels: ["Reading", "Writing", "Listenig"],
        datasets: [{
            label: 'Score',
            data: [ Reading,  Writing, Listenig],
            backgroundColor: [
                'rgba(88, 214, 141 , 1)',
                'rgba(88, 214, 141 , 1)',
                'rgba(88, 214, 141 , 1)'
            ]
        }]
},
    options: {
        scales: {
            
            yAxes: [{
            ticks: {
            
                   min: 0,
                   max: 100,
                   callback: function(value){return value+ "%"}
                },  
								scaleLabel: {
                   display: true,
                   labelString: "Percentage"
                }
            }]
        }
    }
});


      </script>


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
