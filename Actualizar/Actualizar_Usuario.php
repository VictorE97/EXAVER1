<?php

ModificarUsuario($_POST['nombre'], $_POST['usuario'], $_POST['password'], $_POST['idPaper'], $_POST['idPerfil'], $_POST['idUsuario']);

	function ModificarUsuario($nombre, $usuario, $password, $idPaper, $idPerfil, $idUsuario)
	{
		$conexion=mysqli_connect('localhost', 'root', '123456', 'exaver1');
		$sentencia="UPDATE usuarios SET nombre='".$nombre."', usuario='".$usuario."', password='".$password."', idPaper='".$idPaper."', idPerfil='".$idPerfil."' WHERE idUsuario='".$idUsuario."' ";
		mysqli_query($conexion,$sentencia) or die (mysqli_error());
	}
?>
<script type="text/javascript">
	alert("Part One Correctly Modified");
	window.location.href='../UsuariosTL.php';
</script>