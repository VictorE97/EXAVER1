<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$idexamen_parte = (isset($_POST['idexamen_parte'])) ? $_POST['idexamen_parte'] : '';
$rol = (isset($_POST['rol'])) ? $_POST['rol'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idusuarios_examen_parte = (isset($_POST['idusuarios_examen_parte'])) ? $_POST['idusuarios_examen_parte'] : '';

switch($opcion){
    case 2: //modificación
        $consulta = "UPDATE usuarios_examen_parte SET idexamen_parte='$idexamen_parte', rol='$rol' WHERE idusuarios_examen_parte='$idusuarios_examen_parte' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT idusuarios_examen_parte, idexamen_parte, rol FROM usuarios_examen_parte WHERE idexamen_parte='$idexamen_parte' ";       
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
