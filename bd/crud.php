<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$estatus = (isset($_POST['estatus'])) ? $_POST['estatus'] : '';
$idEquipo = (isset($_POST['idEquipo'])) ? $_POST['idEquipo'] : '';
$idPerfil = (isset($_POST['idPerfil'])) ? $_POST['idPerfil'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO usuarios (nombre, correo, usuario, password, telefono, estatus, idEquipo, idPerfil) VALUES('$nombre', '$correo', '$usuario', '$password', '$telefono', '$estatus', '$idEquipo', '$idPerfil') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, nombre, correo, usuario, password, telefono, estatus, idEquipo, idPerfil FROM usuarios ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE usuarios SET nombre='$nombre', correo='$correo', usuario='$usuario', password='$password', telefono='$telefono', estatus='$estatus', idEquipo='$idEquipo', idPerfil='$idPerfil' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, nombre, correo, usuario, password, telefono, estatus, idEquipo, idPerfil FROM personas WHERE id='$id' ";       
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
