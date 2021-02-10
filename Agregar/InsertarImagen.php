<?php

	require '../Conexion.php';
	$reactivo=$_POST['reactivo'];
	$imagen='';
	if (isset($_FILES["foto"])) {
		$file = $_FILES["foto"];
		$nombre = $file["name"];
		$tipo = $file["type"];
		$ruta_provisional = $file["tmp_name"];
		$size = $file["size"];
		$dimensiones = getimagesize($ruta_provisional);
		$width = $dimensiones[0];
		$height = $dimensiones[1];
		$carpeta = "../fotos/";
		if ($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo !='image/gif') {

			echo "Error, el archivo no es imagen";
		}else if ($size > 3*1024*1024) {
			echo "Error el tamaño maximo permitido es 3MB";
		}else{

			$src = $carpeta.$nombre;
			move_uploaded_file($ruta_provisional, $src);
			$imagen="fotos/".$nombre;
		}
	}

	$query=mysqli_query($mysqli, "INSERT INTO foto (reactivo, foto) VALUES ('$reactivo', '$imagen')");

?>

<script type="text/javascript">
	alert("Reactivo Creado Correctamente");
	window.location.href = '../MostrarE1P1.php';
</script>