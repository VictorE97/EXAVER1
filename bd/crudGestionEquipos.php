<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$idEquipo = (isset($_POST['idEquipo'])) ? $_POST['idEquipo'] : '';
$idVersion = (isset($_POST['idVersion'])) ? $_POST['idVersion'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idequipo_version = (isset($_POST['idequipo_version'])) ? $_POST['idequipo_version'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO equipo_version (idEquipo, idVersion) VALUES('$idEquipo', '$idVersion') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT * FROM equipo_versio";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE equipo_version SET idEquipo='$idEquipo', idVersion='$idVersion' WHERE idequipo_version='$idequipo_version' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT equipo.nombre AS nombreEquipo, version.nombre AS nombreVersion, idequipo_version
        FROM equipo
        LEFT JOIN equipo_version
        ON equipo.idEquipo = equipo_version.idEquipo
        LEFT JOIN version
        ON version.idVersion = equipo_version.idVersion";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM personas WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
