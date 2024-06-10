<?php

session_start();

require 'db.php';

if (!isset($_GET['sucursal'])){
    header('Location: ubicaciones.php');
}

$sql = $conn->prepare('SELECT * from precios_combustible WHERE id=:id');
$sql->bindParam(':id',$_GET['sucursal']);
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sucursal - <?= $result['Nombre']; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/plantilla2.css">
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

                <?php if (isset($_SESSION['user_id'])):?>
                    <a href="logout.php"><li>Cerrar sesion</li></a>        
                <?php endif; ?>
                <?php if (!isset($_SESSION['user_id'])):?>
                   <a href="login.php"><li>Entrar</li></a>        
                <?php endif; ?>
            </ul>
        </nav>
        <section id="menu">
            <h3 id="titulo"><b>Departamentos</b></h3>
            <ul>
                <a href="ubicaciones.php#ahuachapan"><li>Ahuachapán</li></a>
                <a href="ubicaciones.php#santa_ana"><li>Santa Ana</li></a>
                <a href="ubicaciones.php#sonsonate"><li>Sonsonate</li></a>
                <a href="ubicaciones.php#chalatenango"><li>Chalatenango</li></a>
                <a href="ubicaciones.php#la_libertad"><li>La Libertad</li></a>
                <a href="ubicaciones.php#san_salvador"><li>San Salvador</li></a>
                <a href="ubicaciones.php#cuscatlan"><li>Cuscatlán</li></a>
                <a href="ubicaciones.php#la_paz"><li>La Paz</li></a>
                <a href="ubicaciones.php#cabañas"><li>Cabañas</li></a>
                <a href="ubicaciones.php#san_vicente"><li>San Vicente</li></a>
                <a href="ubicaciones.php#usulutan"><li>Usulután</li></a>
                <a href="ubicaciones.php#san_miguel"><li>San Miguel</li></a>
                <a href="ubicaciones.php#morazan"><li>Morazán</li></a>
                <a href="ubicaciones.php#la_union"><li>La Unión</li></a>
            </ul>
        </section>
        <section id="contenido">
            <h1><?= $result['Nombre'].' - '.$result['Departamento'] ?></h1>
            <br>
            <table>
                <table id="precios">
                    <thead>
                        <tr>
                            <td colspan="2">Precios</td>
                        </tr>
                    </thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Precio</th>
                    </tr>
                    <tr>
                        <td>Regular</td>
                        <td id="valor">$<?= $result['Regular'] ?></td>
                    </tr>
                    <tr>
                        <td>Diesel</td>
                        <td id="valor">$<?= $result['Diesel'] ?></td>
                    </tr>
                    <tr>
                        <td>Especial</td>
                        <td id="valor">$<?= $result['Especial'] ?></td>
                    </tr>
                </table>
            </table>
            <div id="cleaner"></div>
            <p>Ubicado en: <?= $result['Direccion'] ?></p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.1779091542626!2d-89.21361628568874!3d13.707672302008966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa1839f868c6ecdd6!2sGasolinera%20Uno!5e0!3m2!1ses!2ssv!4v1631588859908!5m2!1ses!2ssv"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <div id="clear"></div>
        <footer>&copy; Eco Gaz, Derechos Reservados 2021</footer>
    </div>
</body>

</html>