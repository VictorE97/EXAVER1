<?php
//include_once 'conexion.php';
//$mysqli = new mysqli("localhost", "root", "123456", "bd_final");
//$objeto = new Conexion();
//$conexion = $objeto->Conectar();
$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '123456';
   $dbname = 'bd_final';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }

//Acá van las variables de nombre ETC
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$idUsuario = (isset($_POST['idUsuario'])) ? $_POST['idUsuario'] : '';
$idUsuario = (int)$idUsuario;
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idusuarios_examen_parte = (isset($_POST['idusuarios_examen_parte'])) ? $_POST['idusuarios_examen_parte'] : '';
//$idexamen_parte = (isset($_POST['idexamen_parte'])) ? $_POST['idexamen_parte'] : '';
//SUSTITUYE la consulta por la que ya tieens
   $sql = 'UPDATE usuarios_examen_parte SET idUsuario='.$idUsuario.' WHERE idexamen_parte='.$idusuarios_examen_parte.' AND rol=2';
   //echo ($sql);
   if (mysqli_query($conn, $sql)) {
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
    $resultado = mysqli_query($conn, $consulta);
    //echo ($resultado);      
    //$resultado = $conexion->prepare($consulta);
    //$resultado->execute();
    $data=mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
      //echo "Record updated successfully";
   } else {
      //echo "Error updating record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
// Recepción de los datos enviados mediante POST desde el JS   

/*$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$idUsuario = (isset($_POST['idUsuario'])) ? $_POST['idUsuario'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
//$idusuarios_examen_parte = (isset($_POST['idusuarios_examen_parte'])) ? $_POST['idusuarios_examen_parte'] : '';
$idexamen_parte = (isset($_POST['idexamen_parte'])) ? $_POST['idexamen_parte'] : '';



switch($opcion){
    case "2":
        //SUSTITUYE la consulta por la que ya tieens
   
        
        //modificación
        //$consulta = "UPDATE usuarios_examen_parte SET idUsuario='$idUsuario' WHERE idusuarios_examen_parte='$idexamen_parte' AND rol='1'";
        //echo ($consulta);		
        //$resultado = $mysqli->query($consulta);
        //$resultado->execute();        
        
        /*$consulta = "SELECT partes.idParte, partes.nombre AS nombreParte,
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
        $resultado->execute();*/
        //$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        /*break;              
}
print "ok";
//print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;*/
