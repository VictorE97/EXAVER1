<?php

ModificarInstruccion($_POST['instruccion'], $_POST['e0'], $_POST['r1'], $_POST['r2'], $_POST['r3'], $_POST['r4'], $_POST['r5'], $_POST['r6'], $_POST['r7'], $_POST['r8'], $_POST['rJ'], $_POST['rA'], $_POST['rB'], $_POST['rC'], $_POST['rD'], $_POST['rE'], $_POST['rF'], $_POST['rG'], $_POST['rH'], $_POST['rI'], $_POST['idPartOne']);

	function ModificarInstruccion($instruccion, $e0, $r1, $r2, $r3, $r4, $r5, $r6, $r7, $r8, $rJ, $rA, $rB, $rC, $rD, $rE, $rF, $rG, $rH, $rI, $idPartOne)
	{
		$conexion=mysqli_connect('localhost', 'root', '123456', 'exaver');
		$sentencia="UPDATE exa1_par1 SET instruccion='".$instruccion."', e0='".$e0."', r1='".$r1."', r2='".$r2."', r3='".$r3."', r4='".$r4."', r5='".$r5."', r6='".$r6."', r7='".$r7."', r8='".$r8."', rJ='".$rJ."', rA='".$rA."', rB='".$rB."', rC='".$rC."', rD='".$rD."', rE='".$rE."', rF='".$rF."', rG='".$rG."', rH='".$rH."', rI='".$rI."' WHERE idPartOne='".$idPartOne."' ";
		mysqli_query($conexion,$sentencia) or die (mysqli_error());
	}
?>
<script type="text/javascript">
	alert("Part One Correctly Modified");
	window.location.href='../Part One.php';
</script>