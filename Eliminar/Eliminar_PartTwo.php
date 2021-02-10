<?php

	EliminarPart_Two($_GET['idPartTwo']);

	function EliminarPart_Two($idPartTwo)
	{
                $conexion=mysqli_connect('localhost', 'root', '123456', 'exaver');
		$sentencia="DELETE FROM exa1_part2 WHERE idPartTwo='".$idPartTwo."' ";
		mysqli_query($conexion,$sentencia) or die (mysqli_error());
	}
?>

<script type="text/javascript">
	alert("Part Two Removed Correctly");
	window.location.href='../Part Two.php';
</script>