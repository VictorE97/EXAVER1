<?php

NuevoPerfil($_POST['idUsuarioModalPerfil'], $_POST['idPerfil'], $_POST['idUsuarioAsigno']);

function NuevoPerfil($idUsuario, $idPerfil, $idUsuarioAsigno){
	$fechaHora = date("Y-m-d h:i:s");
	$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
	$sentencia = "INSERT INTO usuarios_perfiles (idUsuario, idPerfil, fechaHora, idUsuarioAsigno) VALUES ('".$idUsuario."','".$idPerfil."','".$fechaHora."','".$idUsuarioAsigno."')";
	echo($sentencia);
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
}

?>

<script type="text/javascript">
	alert("New Team Created Correctly");
	window.location.href = '../Asignaciones.php';
</script>