<?php
include('cone_imagen.php');
$db = new Conexion();

$nombre = $_POST['nombre'] ?? '';
$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';
$foto_name = $_FILES['txt_foto']['name'];
$temp_name = $_FILES['txt_foto']['tmp_name'];
$exits_name = pathinfo($foto_name);

define('formato',[
  'png' => 'png',
  'jpg' => 'jpg',
  'gif' => 'gif',
  'jpeg' => 'jpeg',
]);

//imagenes/nombre del usuario/$foto_name
//mkdir
    if (array_key_exists($exits_name['extension'], formato)) {
      $data = date("Y-m-d",time());
      $direc ="imagenes/".$user;
      mkdir($direc,0777,true);
      move_uploaded_file($temp_name,"imagenes/".$user."/".$foto_name);
      $sql = $db->query("INSERT INTO usuario(id,nombre,usuario,contrasena,fecha_registro,imagen) VALUES(null,'$nombre','$user','$pass','$data','$foto_name')");
      echo "Registro completado correctamente ";
    }else {
      echo "Esa extension de la foto no es la correcta";
    }

 ?>
