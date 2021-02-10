<?php

NuevoUsuario($_POST['nombre'], $_POST['correo'], $_POST['usuario'], $_POST['password'], $_POST['telefono'], $_POST['estatus'], $_POST['idEquipo'], $_POST['idPerfil']);

function NuevoUsuario($nombre, $correo, $usuario, $password, $telefono, $estatus, $idEquipo, $idPerfil){

	$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
	$sentencia = "INSERT INTO usuarios (nombre, correo, usuario, password, telefono, estatus, idEquipo, idPerfil) VALUES ('".$nombre."','".$correo."','".$usuario."',sha1('".$password."'),'".$telefono."','".$estatus."','".$idEquipo."', '".$idPerfil."')";
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
}

?>

<script type="text/javascript">
	alert("New User Created Correctly");
	window.location.href = '../Usuarios.php';
</script>