<?php

NuevaVersion($_POST['nombre'], $_POST['fechaInicio'], $_POST['fechaTermino']);

function NuevaVersion($nombre, $fechaInicio, $fechaTermino){

	$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
	$sentencia = "INSERT INTO version (nombre, fechaInicio, fechaTermino) VALUES ('".$nombre."','".$fechaInicio."','".$fechaTermino."')";
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
}

?>

<script type="text/javascript">
	alert("New User Created Correctly");
	window.location.href = '../Version.php';
</script>