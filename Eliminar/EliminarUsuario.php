<?php

	EliminarUsuario($_GET['idUsuario']);

	function EliminarUsuario($idUsuario)
	{
                $conexion=mysqli_connect('localhost', 'root', '123456', 'bd_final');
		$sentencia="DELETE FROM usuarios WHERE idUsuario='".$idUsuario."' ";
		mysqli_query($conexion,$sentencia) or die (mysqli_error());
	}
?>

<script type="text/javascript">
	alert("User Removed Correctly");
	window.location.href='../Usuarios.php';
</script>