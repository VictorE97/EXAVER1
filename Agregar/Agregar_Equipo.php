<?php

NuevoEquipo($_POST['idUsuario'], $_POST['idEquipo'], $_POST['fechaHora'], $_POST['idUsuarioAsigno']);

function NuevoEquipo($idUsuario, $idEquipo, $fechaHora, $idUsuarioAsigno){

	$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
	$sentencia = "INSERT INTO usuarios_equipo (idUsuario, idEquipo, fechaHora, idUsuarioAsigno) VALUES ('".$idUsuario."','".$idEquipo."','".$fechaHora."','".$idUsuarioAsigno."')";
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
}

?>

<script type="text/javascript">
	alert("New Team Created Correctly");
	window.location.href = '../Asignaciones.php';
</script>