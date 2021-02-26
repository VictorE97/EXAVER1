<?php

NuevoEquipo($_POST['idUsuario'], $_POST['idPerfil'], $_POST['fechaHora'], $_POST['idUsuarioAsigno']);

function NuevoEquipo($idUsuario, $idPerfil, $fechaHora, $idUsuarioAsigno){

	$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
	$sentencia = "INSERT INTO usuarios_perfiles (idUsuario, idPerfil, fechaHora, idUsuarioAsigno) VALUES ('".$idUsuario."','".$idPerfil."','".$fechaHora."','".$idUsuarioAsigno."')";
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
}

?>

<script type="text/javascript">
	alert("New Profile Created Correctly");
	window.location.href = '../Asignaciones.php';
</script>