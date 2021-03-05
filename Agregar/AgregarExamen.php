<?php

NuevoExamen($_POST['nombre'], $_POST['nivel'], $_POST['idVersion']);

function NuevoExamen($nombre, $nivel, $idVersion){
	$fechaCreacion = date("Y-m-d h:i:s");
	$conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
	$sentencia = "INSERT INTO examenes (nombre, nivel, fechaCreacion, idVersion) VALUES ('".$nombre."','".$nivel."','".$fechaCreacion."','".$idVersion."')";
	echo($sentencia);
	mysqli_query($conexion,$sentencia) or die (mysqli_error());
    $idInsertado = mysqli_insert_id($conexion);
    //EXAVER 1 (DEL 1 - 10)
    //EXAVER 2 (DEL 11 - 21)
    //EXAVER 3 (DEL 22 - 32)
    switch($nivel){
        case 1:
            for($indice=1; $indice<=10; $indice++){
                
            $sentencia = "INSERT INTO examen_parte (idExamen, idParte) VALUES ('".$idInsertado."','".$indice."')";
            echo($sentencia);
	        mysqli_query($conexion,$sentencia) or die (mysqli_error());
            }
            break;
        case 2:
            for($indice=11; $indice<=21; $indice++){
                $sentencia = "INSERT INTO examen_parte (idExamen, idParte) VALUES ('".$idInsertado."','".$indice."')";
                echo($sentencia);
                mysqli_query($conexion,$sentencia) or die (mysqli_error());
                }
            break;
        case 3:
            for($indice=22; $indice<=32; $indice++){
                $sentencia = "INSERT INTO examen_parte (idExamen, idParte) VALUES ('".$idInsertado."','".$indice."')";
                echo($sentencia);
                mysqli_query($conexion,$sentencia) or die (mysqli_error());
                }
            break;
    }
}

?>

<script type="text/javascript">
	alert("New Exam Created Correctly");
	window.location.href = '../ExamenesPartes.php';
</script>