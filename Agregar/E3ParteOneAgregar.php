<?php

NuevoR($_POST['Instruccion'], $_POST['3p1p1_pg0'], $_POST['3p1p1_pg1'], $_POST['3p1p1_pg2'], $_POST['3p1p1_pg3'], 
$_POST['3p1p1_pg4'], $_POST['3p1p1_pg5'], $_POST['3p1p1_pg6'], $_POST['3p1p1_pg7'], $_POST['3p1p1_pg8'], 
$_POST['3p1p1_pg9'], $_POST['3p1p1_pg10'], $_POST['3p1p1_pg11'], $_POST['3p1p1_pg12'], $_POST['3p1p1_pg13'], 
$_POST['3p1p1_opcG'], $_POST['3p1p1_opcA'], $_POST['3p1p1_opcB'], $_POST['3p1p1_opcC'], $_POST['3p1p1_opcD'],
$_POST['3p1p1_opcE'], $_POST['3p1p1_opcF']);

function NuevoR($Instruccion, $E3p1p1_pg0, $E3p1p1_pg1, $E3p1p1_pg2, $E3p1p1_pg3, $E3p1p1_pg4, $E3p1p1_pg5,
$E3p1p1_pg6, $E3p1p1_pg7, $E3p1p1_pg8, $E3p1p1_pg9, $E3p1p1_pg10, $E3p1p1_pg11, $E3p1p1_pg12, $E3p1p1_pg13, $E3p1p1_opcG, 
$E3p1p1_opcA, $E3p1p1_opcB, $E3p1p1_opcC, $E3p1p1_opcD, $E3p1p1_opcE, $E3p1p1_opcF){

	$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
	$sentencia = "INSERT INTO exaver3 (Instruccion, 3p1p1_pg0, 3p1p1_pg1, 3p1p1_pg2, 3p1p1_pg3, 3p1p1_pg4, 3p1p1_pg5,
    3p1p1_pg6, 3p1p1_pg7, 3p1p1_pg8, 3p1p1_pg9, 3p1p1_pg10, 3p1p1_pg11, 3p1p1_pg12, 3p1p1_pg13, 3p1p1_opcG, 3p1p1_opcA, 
    3p1p1_opcB, 3p1p1_opcC, 3p1p1_opcD, 3p1p1_opcE, 3p1p1_opcF) VALUES ('".$Instruccion."', '".$E3p1p1_pg0."','".$E3p1p1_pg1."',
     '".$E3p1p1_pg2."','".$E3p1p1_pg3."','".$E3p1p1_pg4."','".$E3p1p1_pg5."', '".$E3p1p1_pg6."', '".$E3p1p1_pg7."', '".$E3p1p1_pg8."',
      '".$E3p1p1_pg9."', '".$E3p1p1_pg10."', '".$E3p1p1_pg11."', '".$E3p1p1_pg12."', '".$E3p1p1_pg13."', '".$E3p1p1_opcG."',
       '".$E3p1p1_opcA."', '".$E3p1p1_opcB."', '".$E3p1p1_opcC."', '".$E3p1p1_opcD."', '".$E3p1p1_opcE."', '".$E3p1p1_opcF."')";
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
}

?>

<script type="text/javascript">
	alert("Part One Created Correctly");
	window.location.href = '../E3PartOne.php';
</script>