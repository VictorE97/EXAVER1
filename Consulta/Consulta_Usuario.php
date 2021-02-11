<?php
  if(isset($_POST['userid'])){
    
 $consulta=ConsultarUsuario($_POST['userid']);

  function ConsultarUsuario($id)
  {
    $conexion = mysqli_connect('localhost', 'root', '123456', 'bd_final');
    $sentencia="SELECT * FROM usuarios WHERE idUsuario='".$id."' ";
    $resultado=mysqli_query($conexion,$sentencia) or die (mysqli_error());
    $filas=mysqli_fetch_assoc($resultado);
    return [
      $filas['nombre'],
      $filas['correo'],
      $filas['usuario'],
      $filas['password'],
      $filas['telefono'],
      $filas['estatus'],
      $filas['idEquipo'],
      $filas['idPerfil']
    ];

  }
  echo json_encode($consulta);
}
?>
