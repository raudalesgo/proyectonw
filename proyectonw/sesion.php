<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="icomoon/style.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Sesion</title>

  </head>

<body>
  <a href="cerrarsesion.php" class="button blue"><span class="icon-lock"></span>cerrarsesion </a>


<?php
session_start();
if(isset($_SESSION['u_usuario'])){

  echo "<a href='cerrarsesion.php'><a/";
}
else {
  header("Location: formulariologin.php");
}







 ?>

  </body>
</html>
