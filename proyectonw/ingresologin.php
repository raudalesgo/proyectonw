<?php
session_start();

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

include("conexion.php");

$proceso = $conexion->query("SELECT * FROM usuarios where usuario='$usuario' AND contrasena='$contrasena' ");
  if($resultado = mysqli_fetch_array($proceso)){
    $_SESSION['u_usuario'] = $usuario;
    header("Location: sesion.php");
  }
  else {
    header("Location:formulariologin.php ");
  }


 ?>
