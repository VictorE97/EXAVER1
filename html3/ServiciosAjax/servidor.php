<?php

include '../../funcionesphp/bd.php';

$NumA=$_POST['AudioVar'];
$user=$_POST['user1'];
$Ex=$_POST['examen1'];
$in=$_POST['intentos1'];  






if($NumA==1){ 
    $sql  = "UPDATE audios_reproduccion SET Audio_1='1'
    WHERE id_usuario ='$user' AND id_examen='$Ex' AND  Id_Intentos='$in'";
    if (mysqli_query($conn, $sql)) {  $consultasql = 'exito';  
    } else {     $consultasql = 'null';  } 
}
if($NumA==2){
    $sql  = "UPDATE audios_reproduccion SET Audio_2='1'
    WHERE id_usuario ='$user' AND id_examen='$Ex' AND  Id_Intentos='$in'";
    if (mysqli_query($conn, $sql)) {  $consultasql = 'exito';  
    } else {     $consultasql = 'null';  }   

}
if($NumA==3){
    $sql  = "UPDATE audios_reproduccion SET Audio_3='1'
    WHERE id_usuario ='$user' AND id_examen='$Ex' AND  Id_Intentos='$in'";
    if (mysqli_query($conn, $sql)) {  $consultasql = 'exito';  
    } else {     $consultasql = 'null';  }   

}
if($NumA==4){
    $sql  = "UPDATE audios_reproduccion SET Audio_4='1'
    WHERE id_usuario ='$user' AND id_examen='$Ex' AND  Id_Intentos='$in'";
    if (mysqli_query($conn, $sql)) {  $consultasql = 'exito';  
    } else {     $consultasql = 'null';  }   

}
if($NumA==5){
    $sql  = "UPDATE audios_reproduccion SET Audio_5='1'
    WHERE id_usuario ='$user' AND id_examen='$Ex' AND  Id_Intentos='$in'";
    if (mysqli_query($conn, $sql)) {  $consultasql = 'exito';  
    } else {     $consultasql = 'null';  }   

}



?>