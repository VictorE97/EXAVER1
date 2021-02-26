<?php

NuevoEquipo($_POST['idUsuarioModalEquipo'], $_POST['idEquipo'], $_POST['idUsuarioAsigno']);

function NuevoEquipo($idUsuario, $idEquipo, $idUsuarioAsigno){
	$fechaHora = date("Y-m-d h:i:s");
	$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
	$sentencia = "INSERT INTO usuarios_equipo (idUsuario, idEquipo, fechaHora, idUsuarioAsigno) VALUES ('".$idUsuario."','".$idEquipo."','".$fechaHora."','".$idUsuarioAsigno."')";
	echo($sentencia);
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
}

?>

<script type="text/javascript">
	alert("New Team Created Correctly");
	window.location.href = '../Asignaciones.php';
</script>