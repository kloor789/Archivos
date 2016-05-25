<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>subir foto</title>
  </head>
  <body>
      <form  action="upload_file.php" method="post" enctype="multipart/form-data">
        Nombre: <input type="text" name="nombre"><br>
        usuario: <input type="text" name="user"><br>
        contraseña: <input type="text" name="pass"><br>
        <input type="file" name="txt_foto" ><pre></pre>
        <button type="submit" name="button">Registrar</button>
      </form>
<a href="login_php.php">Inicia Session</a>
  </body>
</html>
