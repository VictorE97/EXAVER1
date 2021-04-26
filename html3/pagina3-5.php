<?php  include '../funcionesphp/bd.php';
 include '../funcionesphp/sessiones.php';
			//sesiones
	$id_uS = $_SESSION['id_user'];
	$id_E = $_SESSION['id_examen_GET'];
	$id_Parte =$_SESSION['id_parteProg_GET'];//
	$id_i    =$_SESSION['id_intentos_GET'];// id de los intentos de examen
			
			//variables para las paginas finales
			$Res_contestadas=150;
			$Res_Inicio_PagF=121;
			$tiempo_Paper=75;

			include '../funcionesphp/cronometro.php';  
			$id_Paper=1;
			include '../funcionesphp/TiempoPaper.php';  
			
			
			//variables para ingresar los datos a la base ded datos de las respuestas
			$C_R=151;
			$C_M=165;
			$Parte_Examen=5;


			
			
		?>




<!DOCTYPE html>
<html lang="en" translate="no">
<?php include'header/head.php'; ?>
<head>
	<title>EXAVER Pagina 3-5</title>
</head>

<body >
	<div class="container">


		<!--header-->
		<div class="row">
			<div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
				<!------------------------------------------------------------------->
				<!------------------------------------------------------------------->
				<?php include 'header/header.php';  ?>
				<!--cuerpo-->
				<?php include 'main/html5.php';  ?>
				<!--cuerpo-->
			</div>
			<br>
			<!------------------------------------------------------------------->
			<!------------------------------------------------------------------->
			<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
				<?php include 'preguntas/preguntas5.php' ?>
			</div>
		</div>
		<?php include 'botones/5.php' ?>		

				
				<!--cronometro--->
			<?php include 'script/ScripCrono.php' ?>	
	
			</div>				
</body>
<?php  include '../funcionesphp/footer.php' ?>
</html>






