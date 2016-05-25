<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>winner</title>
  </head>
  <body>
    <form action="" method="post">
      Usuario:<input type="text" name="name"><br>
      Contraseña:<input type="password" name="pass"><pre></pre>
      <button type="submit">Acceder</button>

      <?php
      include 'cone_imagen.php';
      $db = new Conexion();

        if (!empty($_POST['name']) and !empty($_POST['pass'])) {
          $user = $_POST['name'] ?? '';
          $password = $_POST['pass'] ?? '';
          $sql = $db->query("SELECT * FROM usuario WHERE usuario='$user' AND contrasena='$password'");
          $rows = $sql->fetch_array();
          define('sesiones',[
            'id_user' => $rows['id'],
            'name_user' => $rows['usuario'],
            'pass_user' => $rows['contrasena'],
            'fecha_user' => $rows['fecha_registro'],
            'imagen_user' => $rows['imagen'],
          ]);
          if (sesiones['name_user'] == $user and sesiones['pass_user'] == $password) {
            session_start();
            $_SESSION['uid'] = sesiones['name_user'];

            header('location: user_php.php');
          }else {
            echo "datos incorrectos";
          }

        }
          



       ?>
    </form>
  </body>
</html>
