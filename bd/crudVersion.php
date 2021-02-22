<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$fechaInicio = (isset($_POST['fechaInicio'])) ? $_POST['fechaInicio'] : '';
$fechaTermino = (isset($_POST['fechaTermino'])) ? $_POST['fechaTermino'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idVersion = (isset($_POST['idVersion'])) ? $_POST['idVersion'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO version (nombre, fechaInicio, fechaTermino) VALUES('$nombre', '$fechaInicio', '$fechaTermino') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT idVersion, nombre, fechaInicio, fechaTermino FROM version ORDER BY idVersion DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE version SET nombre='$nombre', fechaInicio='$fechaInicio', fechaTermino='$fechaTermino' WHERE idVersion='$idVersion' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT idVersion, nombre, fechaInicio, fechaTermino FROM version WHERE idVersion='$idVersion' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM version WHERE idVersion='$idVersion' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
