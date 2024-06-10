<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sobre_nosotros.css">
    <title></title>
</head>

<body>
    <div id="container">
        <header><img src="img/logo.png" alt="Logotipo de la empresa"></header>
        <nav>
            <ul>
                <a href="index.php"><li>Inicio</li></a>
                <a href="ubicaciones.php"><li>Ubicaciones</li></a>
                <a href="#"><li>Sobre nosotros</li></a>
                <a href="contactos.php"><li>Contactos</li></a>

                <?php if (isset($_SESSION['user_id'])):?>
                    <a href="logout.php"><li>Cerrar sesion</li></a>        
                <?php endif; ?>
                <?php if (!isset($_SESSION['user_id'])):?>
                    <a href="login.php"><li>Entrar</li></a>        
                <?php endif; ?>

            </ul>
        </nav>
        <section id="contenido">
            <article>
                <dl>
                    <ul>
                        <dt> <li id="inv"><h1>MISI&Oacute;N</h1>
                        <dd>Somos una empresa 100% Salvadore&ntilde;a dedicada a brindar un servicio superior en la comercializaci&oacute;n de combustibles, que construye relaciones s&oacute;lidas con nuestros clientes, para generar lealtad y permanencia. Como equipo
                            humano, pilar fundamental de la compa&ntilde;&iacute;a, trabajamos viviendo nuestros principios y valores para generar satisfacci&oacute;n de nuestros clientes; bienestar y calidad de vida para nuestros empleados y sus familias; rentabilidad
                            para nuestros accionistas y progreso para la sociedad.
                        </dd>
                        </li>
                    </dt>
                    </ul>
                    &nbsp;
                    <hr> &nbsp;
                    <ul>
                        <dt>
                            <li id="inv">
                                <h1>VISI&Oacute;N</h1>
                                <dd>
                                    Nuestro objetivo es ser referente y modelo en calidad de gesti&oacute;n y 
                                    servicios; buscamos que todos los actores nos elijan y valoren porque
                                     cumplimos sus expectativas.
                                    Podremos ser excelentes y un modelo a seguir en lo profesional, 
                                    pero sobre todos, somos y queremos seguir siendo expertos en personas,
                                     que es lo que nos ha dado &eacute;xitos
                                     y alegr&iacute;as a todos nosotros y a vosotros tambi&eacute;n.
                                    Cuidamos nuestra formaci&oacute;n y continuo aprendizaje, gracias a cada 
                                    cliente, a cada experiencia vivida y sincera, y sobre todo a cada 
                                    d&iacute;a que con tanto entusiasmo compartimos con vosotros.
                                </dd>
                            </li>
                        </dt>
                    </ul>

                    &nbsp;
                    <hr> &nbsp;

                    <ul>
                        <dt>
                            <li id="inv">
                                <h1>VALORES</h1>
                                <dd>
                                    <dd>
                                        <ul>
                                            <li type="square">Honestidad</li>
                                            <li type="square">Dedicaci&oacute;n</li>
                                            <li type="square">Trabajo en equipo</li>
                                            <li type="square">Compromiso</li>
                                            <li type="square">Cortes&iacute;a</li>
                                            <li type="square">Respeto</li>
                                            <li type="square">Actitud positiva</li>
                                        </ul>

                                    </dd>
                                    
                                </dd>
                            </li>
                        </dt>

                    </ul>
                </dl>



            </article>
        </section>
        <footer>&copy; Eco Gaz, Derechos Reservados 2021</footer>
    </div>
</body>

</html>