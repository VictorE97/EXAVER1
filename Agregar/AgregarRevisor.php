<?php

NuevoRevisor($_POST['idUsuario'], $_POST['idexamen_parteModalRevisor'], $_POST['rol']);

function NuevoRevisor($idUsuario, $idexamen_parte, $rol){
	$fecha = date("Y-m-d h:i:s");
	$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
	$sentencia = "INSERT INTO usuarios_examen_parte (idUsuario, idexamen_parte, rol, fecha) VALUES ('".$idUsuario."','".$idexamen_parte."','".$rol."','".$fecha."')";
	echo($sentencia);
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
}

?>

<script type="text/javascript">
	alert("New Created Correctly");
	window.location.href = '../indexTL.php';
</script>