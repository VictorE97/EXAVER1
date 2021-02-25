<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$idEquipo = (isset($_POST['idEquipo'])) ? $_POST['idEquipo'] : '';
$idPerfil = (isset($_POST['idPerfil'])) ? $_POST['idPerfil'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idusuarios_equipo = (isset($_POST['idusuarios_equipo'])) ? $_POST['idusuarios_equipo'] : '';
$idusuarios_perfiles = (isset($_POST['idusuarios_perfiles'])) ? $_POST['idusuarios_perfiles'] : '';

switch($opcion){
    case 2: //modificación
        $consulta = "UPDATE usuarios_equipo SET idEquipo='$idEquipo' WHERE idusuarios_equipo='$idusuarios_equipo' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT idusuarios_equipo, idEquipo FROM usuarios_equipo WHERE idEquipo='$idEquipo' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
        
        case 3: //modificación
            $consulta = "UPDATE usuarios_perfiles SET idPerfil='$idPerfil' WHERE idusuarios_perfiles='$idusuarios_perfiles' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();        
            
            $consulta = "SELECT idusuarios_perfiles, idPerfil FROM usuarios_perfiles WHERE idPerfil='$idPerfil' ";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;  
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
