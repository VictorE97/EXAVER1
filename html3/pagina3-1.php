<?php  include '../funcionesphp/bd.php';
 include '../funcionesphp/sessiones.php';
 //sesiones
 $id_uS = $_SESSION['id_user'];
 $id_E = $_SESSION['id_examen_GET'];
 $id_Parte =$_SESSION['id_parteProg_GET'];//
 $id_i    =$_SESSION['id_intentos_GET'];// id de los intentos de examen

		
			$Res_contestadas=120;
			$Res_Inicio_PagF=120;
			$tiempo_Paper=75;
			include '../funcionesphp/cronometro.php';  
				$id_Paper=1;
			include '../funcionesphp/TiempoPaper.php';  
			//variables para el autollenador
			$contador=121;
			$contadorMax=125;
			
			//variables para ingresar los datos a la base ded datos de las respuestas
			$C_R=121;
			$C_M=125;
			$Parte_Examen=1;
			///variables para el auto llenado
			$AutoLLenado1=121;
			$AutoLLenado2=122;
			$AutoLLenado3=123;
			$AutoLLenado4=124;
			$AutoLLenado5=125;
			$AutoLLenado6=0;
			$AutoLLenado7=0;
			$AutoLLenado8=0;
			$AutoLLenado9=0;
			$AutoLLenado10=0;



			
		?>



<!DOCTYPE html>
<html lang="en" translate="no">
<?php include'header/head.php'; ?>
<head>
	<title>EXAVER Pagina 3-1</title>
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
				<?php include 'main/html1.php';  ?>
				<!--cuerpo-->
			</div>
			<br>
			<!------------------------------------------------------------------->
			<!------------------------------------------------------------------->
			<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
				<?php include 'preguntas/preguntas1.php' ?>
			</div>
		</div>
		<?php include 'botones/1.php' ?>	

				<!--parte para actulizar y rellenar las respuestas de manera automatica--->
			<?php  include 'AutoLlenaphp/AutoPart1.php' ?>
				<!--cronometro--->
			<?php include 'script/ScripCrono.php' ?>
	</div>				
</body>
<?php  include '../funcionesphp/footer.php' ?>
</html>










