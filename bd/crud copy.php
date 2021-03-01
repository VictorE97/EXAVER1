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

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO usuarios (nombre, correo, usuario, password, telefono, estatus) VALUES('$nombre', '$correo', '$usuario', sha1('$password'), '$telefono', '$estatus') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, nombre, correo, usuario, password, telefono, estatus FROM usuarios ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE usuarios_equipo SET idEquipo='$idEquipo' WHERE idusuarios_equipo='$idusuarios_equipo' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT idusuarios_equipo, idEquipo FROM personas WHERE idusarios_equipo='$idusuarios_equipo' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM usuarios WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
