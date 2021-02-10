<?php

ModificarInstruccion($_POST['instruccion'], $_POST['e0'], $_POST['e0_0'], $_POST['er_0'], $_POST['r1_1'], $_POST['r1_2'], $_POST['r2_1'], $_POST['r2_2'], $_POST['r3_1'], $_POST['r3_2'], $_POST['r4_1'], $_POST['r4_2'], $_POST['r5_1'], $_POST['r5_2'], $_POST['r6_1'], $_POST['r6_2'], $_POST['r7_1'], $_POST['r7_2'], $_POST['r8_1'], $_POST['r8_2'], $_POST['rA'], $_POST['rB'], $_POST['rC'], $_POST['rD'], $_POST['rE'], $_POST['rF'], $_POST['rG'], $_POST['rH'], $_POST['rI'], $_POST['rJ'], $_POST['nom0_1'], $_POST['nom0_2'], $_POST['nom0_3'], $_POST['nom1_1'], $_POST['nom1_2'], $_POST['nom1_3'], $_POST['nom2_1'], $_POST['nom2_2'], $_POST['nom2_3'], $_POST['nom3_1'], $_POST['nom3_2'], $_POST['nom3_3'], $_POST['nom4_1'], $_POST['nom4_2'], $_POST['nom4_3'], $_POST['nom5_1'], $_POST['nom5_2'], $_POST['nom5_3'], $_POST['nom6_1'], $_POST['nom6_2'], $_POST['nom6_3'], $_POST['nom7_1'], $_POST['nom7_2'], $_POST['nom7_3'], $_POST['nom8_1'], $_POST['nom8_2'], $_POST['nom8_3'], $_POST['idPartTwo']);

	function ModificarInstruccion($instruccion, $e0, $e0_0, $er_0, $r1_1, $r1_2, $r2_1, $r2_2, $r3_1, $r3_2, $r4_1, $r4_2, $r5_1, $r5_2, $r6_1, $r6_2, $r7_1, $r7_2, $r8_1, $r8_2, $rA, $rB, $rC, $rD, $rE, $rF, $rG, $rH, $rI, $rJ, $nom0_1, $nom0_2, $nom0_3, $nom1_1, $nom1_2, $nom1_3, $nom2_1, $nom2_2, $nom2_3, $nom3_1, $nom3_2, $nom3_3, $nom4_1, $nom4_2, $nom4_3, $nom5_1, $nom5_2, $nom5_3, $nom6_1, $nom6_2, $nom6_3, $nom7_1, $nom7_2, $nom7_3, $nom8_1, $nom8_2, $nom8_3, $idPartTwo)
	{
		$conexion=mysqli_connect('localhost', 'root', '123456', 'exaver');
		$sentencia="UPDATE exa1_part2 SET instruccion='".$instruccion."', e0='".$e0."', e0_0='".$e0_0."', er_0='".$er_0."', r1_1='".$r1_1."', r1_2='".$r1_2."', r2_1='".$r2_1."', r2_2='".$r2_2."', r3_1='".$r3_1."', r3_2='".$r3_2."', r4_1='".$r4_1."', r4_2='".$r4_2."', r5_1='".$r5_1."', r5_2='".$r5_2."', r6_1='".$r6_1."', r6_2='".$r6_2."', r7_1='".$r7_1."', r7_2='".$r7_2."', r8_1='".$r8_1."', r8_2='".$r8_2."', rA='".$rA."', rB='".$rB."', rC='".$rC."', rD='".$rD."', rE='".$rE."', rF='".$rF."', rG='".$rG."', rH='".$rH."', rI='".$rI."', rJ='".$rJ."', nom0_1='".$nom0_1."', nom0_2='".$nom0_2."', nom0_3='".$nom0_3."', nom1_1='".$nom1_1."', nom1_2='".$nom1_2."', nom1_3='".$nom1_3."', nom2_1='".$nom2_1."', nom2_2='".$nom2_2."', nom2_3='".$nom2_3."', nom3_1='".$nom3_1."', nom3_2='".$nom3_2."', nom3_3='".$nom3_3."', nom4_1='".$nom4_1."', nom4_2='".$nom4_2."', nom4_3='".$nom4_3."', nom5_1='".$nom5_1."', nom5_2='".$nom5_2."', nom5_3='".$nom5_3."', nom6_1='".$nom6_1."', nom6_2='".$nom6_2."', nom6_3='".$nom6_3."', nom7_1='".$nom7_1."', nom7_2='".$nom7_2."', nom7_3='".$nom7_3."', nom8_1='".$nom8_1."', nom8_2='".$nom8_2."', nom8_3='".$nom8_3."' WHERE idPartTwo='".$idPartTwo."' ";
		mysqli_query($conexion,$sentencia) or die (mysqli_error());
	}
?>
<script type="text/javascript">
	alert("Part One Correctly Modified");
	window.location.href='../Part Two.php';
</script>
