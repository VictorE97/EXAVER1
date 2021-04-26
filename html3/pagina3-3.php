<?php  include '../funcionesphp/bd.php';
 include '../funcionesphp/sessiones.php';
			//sesiones
	$id_uS = $_SESSION['id_user'];
	$id_E = $_SESSION['id_examen_GET'];
	$id_Parte =$_SESSION['id_parteProg_GET'];//
	$id_i    =$_SESSION['id_intentos_GET'];// id de los intentos de examen
			
			//variables para las paginas finales
			$Res_contestadas=130;
			$Res_Inicio_PagF=121;
			$tiempo_Paper=75;
			include '../funcionesphp/cronometro.php';  
				$id_Paper=1;
				include '../funcionesphp/TiempoPaper.php';  
			//variables para el autollenador
			$contador=131;
			$contadorMax=140;
			
			//variables para ingresar los datos a la base ded datos de las respuestas
			$C_R=131;
			$C_M=140;
			$Parte_Examen=3;
			///variables para el auto llenado
			$AutoLLenado1=131;
			$AutoLLenado2=132;
			$AutoLLenado3=133;
			$AutoLLenado4=134;
			$AutoLLenado5=135;
			$AutoLLenado6=136;
			$AutoLLenado7=137;
			$AutoLLenado8=138;
			$AutoLLenado9=139;
			$AutoLLenado10=140;


			
		
		?>


<!DOCTYPE html>
<html lang="en" translate="no">
<?php include'header/head.php'; ?>
<head>
	<title>EXAVER Pagina 3-3</title>
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
				<?php include 'main/html3.php';  ?>
				<!--cuerpo-->
			</div>
			<br>
			<!------------------------------------------------------------------->
			<!------------------------------------------------------------------->
			<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
				<?php include 'preguntas/preguntas3.php' ?>
			</div>
		</div>
		<?php include 'botones/3.php' ?>	

				<!--parte para actulizar y rellenar las respuestas de manera automatica--->
			<?php  include 'AutoLlenaphp/AutoPart1.php' ?>
				<!--cronometro--->
			<?php include 'script/ScripCrono.php' ?>
	</div>				
</body>
<?php  include '../funcionesphp/footer.php' ?>
</html>





























