<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/plantilla.css">
    <title>Contactos</title>
</head>

<body>
    <div id="container">
        <header><img src="img/logo.png" alt="Logotipo de la empresa"></header>
        <nav>
            <ul>
                <a href="index.php"><li>Inicio</li></a>
                <a href="ubicaciones.php"><li>Ubicaciones</li></a>
                <a href="sobre_nosotros.php"><li>Sobre nosotros</li></a>
                <a href="#"><li>Contactos</li></a>

                <?php if (isset($_SESSION['user_id'])):?>
                    <a href="logout.php"><li>Cerrar sesion</li></a>       
                <?php endif; ?>
                <?php if (!isset($_SESSION['user_id'])):?>
                    <a href="login.php"><li>Entrar</li></a>        
                <?php endif; ?>

            </ul>
        </nav>
        <section id="contenido">
            <style type="text/css">
                table,
                th,
                td {
                    border: 2px solid black;
                }
            </style>

            <h2 align="center">Directorio del personal de la empresa</h2>
            <br>
            <table style="width: 100%">
                <tr>
                    <td>Contactos</td>
                    <td>Correo</td>
                    <td>Telefono</td>
                </tr>
                <td>
                    Ing. Rommel Alejandro Rivera Pinto
                    <p class="left">Director</p>
                </td>
                <td><u>2507282020@mail.utec.edu.sv</u></td>
                <td>+503 2590-5362</td>
                <tr>
                    <td>
                        Lic. Lizbeth Jazmín Hernández Rolin
                        <p class="left">Asistente Técnico</p>
                    </td>
                    <td><u>1708292020@mail.utec.edu.sv</u></td>
                    <td>+503 2590-5362</td>
                </tr>
                <tr>
                    <td>
                        Ing. Cecilia Beatriz Zometa Orellana
                        <p class="left">Sub Director Técnico</p>
                    </td>
                    <td><u>2501792020@mail.utec.edu.sv</u></td>
                    <td>+503 2590-5361</td>
                </tr>
                <tr>
                    <td>
                        <div class="center">
                            <a href="https://instagram.com/ecogaz_?utm_medium=copy_link"><img src="img/instagram.png" alt="icono" width="60px" height="60px"></a>
                        </div>
                    </td>
                    <td>
                        <div class="center">
                            <a href="https://www.facebook.com/ECO-GAZ-104279318678886/"><img src="img/facebook.png" alt="icono" width="60px" height="60px"></a>
                        </div>
                    </td>
                    <td>
                        <div class="center">
                            <a href="https://www.youtube.com/user/YPFnuestraenergia"><img src="img/youtube.png" alt="icono" width="60px" height="60px"></a>
                        </div>
                    </td>
                </tr>
            </table>
        </section>
        <footer>&copy; Eco Gaz, Derechos Reservados 2021</footer>
    </div>
</body>

</html>