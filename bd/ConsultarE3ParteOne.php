<?php

$link = mysqli_connect("localhost", "root", "123456");

mysqli_select_db($link, "bd_final");

$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

$result = mysqli_query($link, "SELECT parteTrabajada FROM partestrabajadas where idexamen_parte = 22;");

mysqli_data_seek ($result, 0);

$extraido= mysqli_fetch_array($result);

    //echo ($resultado);      
    //$resultado = $conexion->prepare($consulta);
    //$resultado->execute();
    $data=mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo ($extraido['parteTrabajada']);
    //echo json_encode($extraido, JSON_UNESCAPED_UNICODE);
//echo "- Examen/Parte: ".$extraido['idexamen_parte']."<br/>";

//echo "- UsuarioTrabajo: ".$extraido['idUsuarioTrabajo']."<br/>";

//echo "- FechaHoraCreacion: ".$extraido['fechaHoraCreacion']."<br/>";



//echo "- Estatus: ".$extraido['estatus']."<br/>";


//mysqli_free_result($result);

mysqli_close($link);

?>