<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/plantilla.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <title>Home</title>
</head>
</head>
<body>

<div id="container">
        <header><img src="img/logo.png" alt="Logotipo de la empresa"></header>
        <nav>
            <ul>
                <a href="#"><li>Inicio</li></a>
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
            <?php if (isset($_SESSION['user_id'])):?>
                <ul id="datos">
                    <a href="List.php"><li>Administrar base de datos</li></a>
                </ul> <br><br>         
            <?php endif; ?>
            
        </nav>
        <section id="contenido">
            <article>
                <h1>Visita nuestras sucursales, ser&aacute; un gusto poder atenderte</h1>
                <br>
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="img/img index/gasolinera1.jpg" style="width:100%; height: 600px;">

                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="img/img index/gasolinera2.jpg" style="width:100%; height: 600px;">

                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="img/img index/gasolinera3.jpg" style="width:100%; height: 600px;">

                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="img/img index/gasolinera4.jpg" style="width:100%; height: 600px;">

                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                </div>
            </article>
            &nbsp;
            <hr> &nbsp;
            <h2 class="subs">Servicios</h2> <br>


            <div id="contentS">
                <img src="img/img index/gas.jpg" alt="gasolina" width="400" height="300">&nbsp;&nbsp;&nbsp;
                <img src="img/img index/trabajador.jpg" alt="trabajador" width="400" height="300">

            </div>
            <br>
            <p>En cuanto a los servicios contamos con personal altamente calificado y profesional que se destaca al realizar cada labor solicitado por nuestros clientes, de igual manera dejamos una huella al brindar nuestros servicios en el cual demostramos
                nuestros años de experiencia y el profesionalismo con el que contamos.</p>

            &nbsp;
            <hr> &nbsp;

            <h2 class="subs">Beneficios</h2> <br>
            <img src="img/img index/beneficios.jpg" alt="beneficios" class="imgsindex"> <br>
            <ul>
                <li type="square">Garantizamos calidad en nuestros productos. </li>
                <li type="square">Tenemos la m&aacute;s alta variabilidad. </li>
                <li type="square">Nos mantenemos a la vanguardia de las innovaciones en el mercado</li>
                <li type="square">Nuestro compromiso y eficiencia con nuestros clientes son los pilares de nuestro trabajo</li>
                <li type="square">Brindamos soluciones personalizadas a tus necesidades.</li>
            </ul>



        </section>
        <footer>&copy; Eco Gaz, Derechos Reservados 2021</footer>
    </div>
</body>
<script src="js/carrusel.js"></script>
</body>
</html>