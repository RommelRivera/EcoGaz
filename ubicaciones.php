<?php session_start(); require 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ubicaciones</title>
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
                <a href="#"><li>Ubicaciones</li></a>
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
                <a href="#ahuachapan"><li>Ahuachapán</li></a>
                <a href="#santa_ana"><li>Santa Ana</li></a>
                <a href="#sonsonate"><li>Sonsonate</li></a>
                <a href="#chalatenango"><li>Chalatenango</li></a>
                <a href="#la_libertad"><li>La Libertad</li></a>
                <a href="#san_salvador"><li>San Salvador</li></a>
                <a href="#cuscatlan"><li>Cuscatlán</li></a>
                <a href="#la_paz"><li>La Paz</li></a>
                <a href="#cabañas"><li>Cabañas</li></a>
                <a href="#san_vicente"><li>San Vicente</li></a>
                <a href="#usulutan"><li>Usulután</li></a>
                <a href="#san_miguel"><li>San Miguel</li></a>
                <a href="#morazan"><li>Morazán</li></a>
                <a href="#la_union"><li>La Unión</li></a>
            </ul>
        </section>
        <section id="contenido">
            <section id="ahuachapan" class="departamento">
                <h2>Ahuachapán</h2><br>
                <ul>
                    <?php 
                    
                    $ahuachapan = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'Ahuachapán\'');
                    $ahuachapan->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $ahuachapan->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="santa_ana" class="departamento">
                <h2>Santa Ana</h2>
                <ul>
                    <?php 
                    
                    $santa_ana = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'Santa Ana\'');
                    $santa_ana->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $santa_ana->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="sonsonate" class="departamento">
                <h2>Sonsonate</h2>
                <ul>
                    <?php 
                    
                    $sonsonate = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'Sonsonate\'');
                    $sonsonate->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $sonsonate->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="chalatenango" class="departamento">
                <h2>Chalatenango</h2>
                <ul>
                    <?php 
                    
                    $chalatenango = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'Chalatenango\'');
                    $chalatenango->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $chalatenango->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="la_libertad" class="departamento">
                <h2>La Libertad</h2>
                <ul>
                    <?php 
                    
                    $la_libertad = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'La Libertad\'');
                    $la_libertad->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $la_libertad->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="san_salvador" class="departamento">
                <h2>San Salvador</h2>
                <ul>
                    <?php 
                    
                    $san_salvador = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'San Salvador\'');
                    $san_salvador->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $san_salvador->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="cuscatlan" class="departamento">
                <h2>Cuscatlán</h2>
                <ul>
                    <?php 
                    
                    $cuscatlan = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'Cuscatlán\'');
                    $cuscatlan->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $cuscatlan->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="la_paz" class="departamento">
                <h2>La Paz</h2>
                <ul>
                    <?php 
                    
                    $la_paz = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'La Paz\'');
                    $la_paz->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $la_paz->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="cabañas" class="departamento">
                <h2>Cabañas</h2>
                <ul>
                    <?php 
                    
                    $cabanas = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'Cabañas\'');
                    $cabanas->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $cabanas->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="san_vicente" class="departamento">
                <h2>San Vicente</h2>
                <ul>
                    <?php 
                    
                    $san_vicente = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'San Vicente\'');
                    $san_vicente->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $san_vicente->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="usulutan" class="departamento">
                <h2>Usulután</h2>
                <ul>
                    <?php 
                    
                    $usulutan = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'Usulután\'');
                    $usulutan->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $usulutan->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="san_miguel" class="departamento">
                <h2>San Miguel</h2>
                <ul>
                    <?php 
                    
                    $san_miguel = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'San Miguel\'');
                    $san_miguel->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $san_miguel->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="morazan" class="departamento">
                <h2>Morazán</h2>
                <ul>
                    <?php 
                    
                    $morazan = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'Morazán\'');
                    $morazan->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $morazan->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <section id="la_union" class="departamento">
                <h2>La Unión</h2>
                <ul>
                    <?php 
                    
                    $la_union = $conn->prepare('SELECT id, Nombre from precios_combustible WHERE Departamento=\'La Unión\'');
                    $la_union->execute();

                    ?>

                    <div class="grid-container">
                        <?php while($row = $la_union->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="grid-item">
                                <img src="img/img index/gasolinera2.jpg" alt=""><br><br>
                                <a href="sucursal.php?sucursal=<?= $row['id'] ?>"><button><?= $row['Nombre'] ?></button></a>
                            </div>
                        <?php } ?>
                    </div>
                </ul>
            </section>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.1779091542626!2d-89.21361628568874!3d13.707672302008966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa1839f868c6ecdd6!2sGasolinera%20Uno!5e0!3m2!1ses!2ssv!4v1631588859908!5m2!1ses!2ssv"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <br>
        </section>
        <div id="clear"></div>
        <footer>&copy; Eco Gaz, Derechos Reservados 2021</footer>
    </div>
</body>

</html>