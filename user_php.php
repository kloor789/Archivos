<?php
session_start();
include 'cone_imagen.php';
$db = new Conexion();
if (isset($_SESSION['uid'])) {
  $dir = "./imagenes/".$_SESSION['uid'];

  $abrir = opendir($dir);
  while (($file = readdir($abrir)) != FALSE) {
    if ($file != "." && $file != ".." && $file != "Thumbs.db") {

    }
  }
}else {
  session_start();
  session_destroy();
  header('location: login_php.php');
}


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>winner</title>
  </head>
  <body>
    Bienvenido: <?php echo "<img border='1' width='100px' src=".$dir."/".$file."/>".$_SESSION['uid']; ?>

  </body>
</html>
