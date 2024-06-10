<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
  }
  require 'db.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT idAdministrador, Login, Password FROM administrador WHERE Login = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['Password'])) {
      $_SESSION['user_id'] = $results['idAdministrador'];
      header("Location: index.php");
    } else {
      $message = ' Sus credenciales incorrectas';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/plantilla.css">
    <link rel="stylesheet" href="css/registro.css">
    <title>Inicio</title>
</head>

<body>
    <div id="container">
        <header><img src="img/logo.png" alt="Logotipo de la empresa"></header>
        <nav>
            <ul>
                <a href="index.php"><li>Inicio</li></a>
                <a href="ubicaciones.php"><li>Ubicaciones</li></a>
                <a href="sobre_nosotros.php"><li>Sobre nosotros</li></a>
                <a href="contactos.php"><li>Contactos</li></a>
                <a href="#"><li>Entrar</li></a>
            </ul>
        </nav>
        <section id="contenido">
            <div class="cont">
                <form action="login.php" method="post">
                    <h1>Login</h1>

                    <?php if(!empty($message)): ?>
                      <p> <?= $message ?></p>
                    <?php endif; ?>

                    <b>Login</b><br>
                    <input type="text" placeholder="Ingrese su nombre de usuario" name="email" id="email"><br>

                    <br>

                    <b>Contraseña</b><br>
                    <input type="password" placeholder="Ingrese su contraseña" name="password" id="password" required><br>

                    <br>

                    <input id="ingresar" type="submit" value="Ingresar">
                </form>
            </div>
        </section>
        <footer>&copy; Eco Gaz, Derechos Reservados 2021</footer>
    </div>
</body>

</html>
