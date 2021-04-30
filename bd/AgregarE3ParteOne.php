<?php

NuevoE($_POST['idexamen_parte'], $_POST['idUsuario'], $_POST['TrabajoIW'], $_POST['estatus']);

function NuevoE($idexamen_parte, $idUsuario, $TrabajoIW, $estatus){
    $fechaHoraCreacion = date("Y-m-d h:i:s");

	$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
	$sentencia = "INSERT INTO partestrabajadas (idexamen_parte, idUsuarioTrabajo, fechaHoraCreacion, parteTrabajada, estatus) VALUES ('".$idexamen_parte."','".$idUsuario."','".$fechaHoraCreacion."','".$TrabajoIW."','".$estatus."')";
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
}

?>

<script type="text/javascript">
	alert("New User Created Correctly");
	window.location.href = '../E3ParteOne.php';
</script>