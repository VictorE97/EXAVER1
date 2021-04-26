<?php  include '../funcionesphp/bd.php';
 include '../funcionesphp/sessiones.php';
		//sesiones
	$id_uS = $_SESSION['id_user'];
	$id_E = $_SESSION['id_examen_GET'];
	$id_Parte =$_SESSION['id_parteProg_GET'];//
	$id_i    =$_SESSION['id_intentos_GET'];// id de los intentos de examen
			

			$Res_contestadas=198;
			$Res_Inicio_PagF=181;
			$id_Paper=2;
			

							$sql          = "SELECT * FROM tiempopaper WHERE id_intentos = '$id_i' 
							AND  id_paper='2'";
							$resultado    = $conn->query( $sql );
							$Resp1        = $resultado->fetch_assoc();
							$tiempo_Paper = $Resp1[ 'tiempo_paper' ];
			
			include '../funcionesphp/cronometro.php'; 
		
			
			//variables para ingresar los datos a la base ded datos de las respuestas
			$C_R=199;
			$C_M=205;
			$Parte_Examen=10;
			
         //var que sirve para verificar que numero de audio es
			$Audio_Num='Audio_4';///////////////////////////////////////////////////////////////
			$id_Aud=4;//////////////////////////////////////////////////////////////////////////
			
				
		?>



<!DOCTYPE html>
<html lang="en" translate="no">
<?php include'header/head.php'; ?>
<head>
	<title>EXAVER Pagina 2-10</title>
</head>

<body >
	<div class="container">


		<!--header-->
		<div class="row">
			<div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
				<!------------------------------------------------------------------->
				<!------------------------------------------------------------------->
				<?php include 'header/header2.php';  ?>
            <!--cuerpo-->
            <input type="hidden"  id="AudioVar" value="<?php echo $id_Aud;?>" />
				<input type="hidden"  id="user1" value="<?php echo $id_uS;?>" />
				<input type="hidden"  id="examen1" value="<?php echo $id_E;?>" />
				<input type="hidden"  id="intentos1" value="<?php echo $id_i;?>" />

				<?php include 'main/html10.php';  ?>
				<!--cuerpo-->
			</div>
			<br>
			<!------------------------------------------------------------------->
			<!------------------------------------------------------------------->
			<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
				<?php include 'preguntas/preguntas10.php' ?>
			</div>
		</div>
		<?php include 'botones/10.php' ?>	
			

				<!--cronometro--->
         <?php include 'script/ScripCrono2.php' ?>
         
         <?php  
		 include '../funcionesphp/AudioSQL.php'
		  ?>

		 <script src="../js/01.js"></script>

		 </div>		 
</body>
<?php  include '../funcionesphp/footer.php' ?>
</html>


