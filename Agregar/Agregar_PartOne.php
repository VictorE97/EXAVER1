<?php

NuevoR($_POST['instruccion'], $_POST['e0'], $_POST['r1'], $_POST['r2'], $_POST['r3'], $_POST['r4'], $_POST['r5'], $_POST['r6'], $_POST['r7'], $_POST['r8'], $_POST['rJ'], $_POST['rA'], $_POST['rB'], $_POST['rC'], $_POST['rD'], $_POST['rE'], $_POST['rF'], $_POST['rG'], $_POST['rH'], $_POST['rI']);

function NuevoR($instruccion, $e0, $r1, $r2, $r3, $r4, $r5, $r6, $r7, $r8, $rJ, $rA, $rB, $rC, $rD, $rE, $rF, $rG, $rH, $rI){

	$conexion = mysqli_connect('localhost', 'root', '123456', 'exaver');
	$sentencia = "INSERT INTO exa1_par1 (instruccion, e0, r1, r2, r3, r4, r5, r6, r7, r8, rJ, rA, rB, rC, rD, rE, rF, rG, rH, rI) VALUES ('".$instruccion."','".$e0."','".$r1."','".$r2."','".$r3."','".$r4."','".$r5."', '".$r6."', '".$r7."', '".$r8."', '".$rJ."', '".$rA."', '".$rB."', '".$rC."', '".$rD."', '".$rE."', '".$rF."', '".$rG."', '".$rH."', '".$rI."')";
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
}

?>

<script type="text/javascript">
	alert("Part One Created Correctly");
	window.location.href = '../Part One.php';
</script>