<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$idUsuario = (isset($_POST['idUsuario'])) ? $_POST['idUsuario'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idusuarios_examen_parte = (isset($_POST['idusuario_examen_parte'])) ? $_POST['idusuarios_examen_parte'] : '';

switch($opcion){
    case 2: //modificación
        $consulta = "UPDATE usuarios_examen_parte SET idUsuario='$idUsuario' WHERE idParte='$idParte' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT partes.idParte, partes.nombre AS nombreParte,
        t3.idRol, t3.nombre AS nombreRolEdita, t5.id, t5.nombre AS nombreUsuarioEdita,
        t4.idRol, t4.nombre AS nombreRolRevisa, t6.id, t6.nombre AS nombreUsuarioRevisa,
        partes.paper 
        FROM partes
        INNER JOIN examen_parte
        ON partes.idParte = examen_parte.idParte
        INNER JOIN examenes
        ON examenes.idExamen = examen_parte.idExamen
        INNER JOIN version
        ON version.idVersion = examenes.idVersion
        INNER JOIN equipo_version
        ON equipo_version.idVersion = version.idVersion
        INNER JOIN usuarios_equipo
        ON usuarios_equipo.idEquipo = equipo_version.idEquipo 
        INNER JOIN usuarios_perfiles
        ON usuarios_equipo.idUsuario = usuarios_perfiles.idUsuario
        LEFT JOIN (select * from usuarios_examen_parte INNER JOIN partes ON usuarios_examen_parte.idexamen_parte = partes.idParte WHERE usuarios_examen_parte.rol = '1') AS t1
        ON t1.idexamen_parte = partes.idParte
        LEFT JOIN (select * from usuarios_examen_parte INNER JOIN partes ON usuarios_examen_parte.idexamen_parte = partes.idParte WHERE usuarios_examen_parte.rol = '2') AS t2
        ON t2.idexamen_parte = partes.idParte
        LEFT JOIN roles t3
        ON t1.rol = t3.idRol
        LEFT JOIN roles t4
        ON t2.rol = t4.idRol
        LEFT JOIN usuarios t5
        ON t1.idUsuario = t5.id
        LEFT JOIN usuarios t6
        ON t2.idUsuario = t6.id
        WHERE usuarios_perfiles.idUsuario = '12' AND examenes.nivel = '3' group by partes.idParte";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;              
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
