<?php

	EliminarPart_One($_GET['idPartOne']);

	function EliminarPart_One($idPartOne)
	{
                $conexion=mysqli_connect('localhost', 'root', '123456', 'exaver');
		$sentencia="DELETE FROM exa1_par1 WHERE idPartOne='".$idPartOne."' ";
		mysqli_query($conexion,$sentencia) or die (mysqli_error());
	}
?>

<script type="text/javascript">
	alert("Part One Removed Correctly");
	window.location.href='../Part One.php';
</script>