<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diosam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/servicios.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a class="navbar-brand" href="#">
                        <img src="../IMG/logoDS.png" alt="Bootstrap" width="100" height="80">
                        <span class="texto">Diosam</span>
                    </a>
                </div>
                <div class="col-md-6">
                    <nav>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="../../index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="galeria.php">Galería</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">Conócenos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Visítanos</a>
                            </li>
                            <li class="nav-item">
                            <?php
                            
                            if(isset($_SESSION['email_user']) && $_SESSION['rol'] == 1 ){
                                require_once("../template/user_log.php");
                                echo('<li class="nav-item">
                                <a class="inicia-sesion" href="../../rest/usuarios.html">administrar Usuarios</a>
                                </li>');
                                echo('<li class="nav-item">
                                <a class="inicia-sesion" href="registrar_servicio.php">Agregar servicio</a>
                                </li>');
                                
                            }else if(isset($_SESSION['email_user'])){ 
                                require_once("../template/user_log.php");

                                }else{
                                    echo('<li class="nav-item">
                                    <a class="inicia-sesion" href="login.php">Iniciar Sesión</a>
                                    </li>');
                                }
                    ?>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    </div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="../IMG/colorimetria.png" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Colorimetria</h5>
                    <p class="card-text">Explora la paleta de colores infinita para tu cabello con nuestra colorimetría experta, Cada tono es una expresión única de tu personalidad!</p>
                    <a href="../DOCS/registrarcita.php" class="btn btn-danger">Reservar cita</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="../IMG/mauqillajes.png" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Maquillajes</h5>
                    <p class="card-text">Transforma tu belleza con nuestros maquillajes de ensueño. Descubre un mundo de colores y realza tu estilo único.</p>
                    <a href="../DOCS/registrarcita.php" class="btn btn-danger">Reservar cita</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="../IMG/manicura.png" class="card-img-top" alt="Servicio 3">
                <div class="card-body">
                    <h5 class="card-title">Manicura</h5>
                    <p class="card-text">Embellece tus manos y realza tu elegancia con nuestra manicura experta. Cada uña es una obra maestra en sí misma.</p>
                    <a href="../DOCS/registrarcita.php" class="btn btn-danger">Reservar cita</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
<div class="row">
<div class="col-md-4">
    <div class="card">
        <img src="../IMG/pedicura.png" class="card-img-top" alt="Servicio Adicional">
        <div class="card-body">
            <h5 class="card-title">Pedicura</h5>
            <p class="card-text">Da un paso hacia la elegancia y cuidado de pies impecables con nuestra pedicura de lujo. Cada paso te llevará más cerca de la comodidad.</p>
            <a href="../DOCS/registrarcita.php" class="btn btn-danger">Reservar cita</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <img src="../IMG/peinado1.png" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">Peinados</h5>
            <p class="card-text">Descubre la magia de nuestros peinados y experimenta un look único para cada ocasión, transforma tu cabello y estilo con nosotros!</p>
            <a href="../DOCS/registrarcita.php" class="btn btn-danger">Reservar cita</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <img src="../IMG/cortedama.png" class="card-img-top" alt="Otro Servicio">
        <div class="card-body">
            <h5 class="card-title">Cortes para Dama</h5>
            <p class="card-text">Descubre la elegancia en cada corte con nuestros servicios de cortes de cabello para damas. Conoce cual te luce mas! </p>
            <a href="../DOCS/registrarcita.php" class="btn btn-danger">Reservar cita</a>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <img src="../IMG/cortehombre.png" class="card-img-top" alt="Otro Servicio">
        <div class="card-body">
            <h5 class="card-title">Cortes para Caballero</h5>
            <p class="card-text">Experimenta la perfección en cada corte con nuestros servicios de cortes de cabello para caballeros. Dale a tu cabello el cuidado que merece! </p>
            <a href="../DOCS/registrarcita.php" class="btn btn-danger">Reservar cita</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <img src="../IMG/plachado.png" class="card-img-top" alt="Otro Servicio">
        <div class="card-body">
            <h5 class="card-title">Cepillado y planchado</h5>
            <p class="card-text">Transforma tu cabello en una obra de arte con nuestros servicios de cepillado y planchado quedaras con un hermoso look suave y pulido.</p>
            <a href="../DOCS/registrarcita.php" class="btn btn-danger">Reservar cita</a>
        </div>
    </div>
</div>

    <div class="col-md-4">
        <div class="card">
            <img src="../IMG/keratina.png" class="card-img-top" alt="Otro Servicio">
            <div class="card-body">
                <h5 class="card-title">Keratina</h5>
                <p class="card-text">Devuélvele la vida y la vitalidad a tu cabello con nuestro tratamiento de keratina de alta calidad. La keratina restaurará y fortalecerá tu cabello.</p>
                <a href="../DOCS/registrarcita.php" class="btn btn-danger">Reservar cita</a>
            </div>
        </div>
</div>
</div>
</div>
</body>


<footer>

    <div class="contenido">
        <ul>
            <li>Información de contacto:</li>
            <li>Teléfono: 123-456-789</li>
            <li>Correo: info@example.com</li>
            <li>Dirección: Calle Principal, Ciudad</li>
        </ul>
    </div>
  </footer>


</html>





    