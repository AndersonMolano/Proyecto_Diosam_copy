<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-5bw8tAtvJmYHOgK3aML47V6vo/jU2GfAflw5e4iRdTyW1yF5CEgWg8wGdo0SIlOtx" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="vista/CSS/index.css">
    <script src="vista/"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap');
    </style>
    <title>Index</title>
</head>
<body>
    <header>
    <div class="contenedor-logo-texto">
        <img src="vista/IMG/logoindexx.png" alt="Logo" class="logo">
        <span class="texto">Diosam</span>
    </div>
        <div class="contenido">
        <ul>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vista/DOCS/galeria.php">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vista/DOCS/about.php">Conócenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Visítanos</a>
                </li>
                <?php
                    
                    if(isset($_SESSION['email_user']) && $_SESSION['rol'] == 1 ){
                        require_once("vista/template/user_index.php");
                        echo('<li class="nav-item">
                        <a class="inicia-sesion" href="rest/usuarios.html">administrar Usuarios</a>
                        </li>');
                        echo('<li class="nav-item">
                                <a class="inicia-sesion" href="vista/DOCS/registrar_servicio.php">Agregar servicio</a>
                                </li>');
                        
                    }else if(isset($_SESSION['email_user'])){ 
                        require_once("vista/template/user_index.php");

                        }else{
                            echo('<li class="nav-item">
                            <a class="inicia-sesion" href="vista/DOCS/login.php">Iniciar Sesión</a>
                            </li>');
                        }
                ?>
        </ul>
        </div>  
    </header>
    <div class="contenedor-imagen">
        <img src="vista/IMG/Fondo-Index.jpg" alt="Fondo" class="Fondo-Index">
    </div>
    
    <div class="cards">
        <div class="card card-anim" style="width: 18rem;">
            <img src="vista/IMG/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Servicios</h5>
              <p class="card-text">Conoce nuestros servicios y explora el poder de crear tu estilo junto a Diosam.</p>
              <a href="vista/DOCS/servicios.php" class="btn btn-danger">Bienvenido</a>
            </div>
        </div>
        <div class="card card-anim" style="width: 18rem;">
            <img src="vista/IMG/reserva1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Reservas</h5>
                <p class="card-text">Agenda una cita y prepárate para los cambios que tenemos preparados para ti.</p>
                <a href="vista/DOCS/registrarcita.php" class="btn btn-danger">Bienvenido</a>
            </div>
        </div>
        <div class="card card-anim" style="width: 18rem;">
            <img src="vista/IMG/cepilloo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Galería</h5>
              <p class="card-text">Observa la calidad de nuestros trabajos por si quieres alguna referencia.</p>
              <a href="" class="btn btn-danger">Bienvenido</a>
            </div>
        </div>    
    </div>
    <div class="fondo-diferente">
        <p>hola care colA</p>
    </div>
  
<!--
 Nuevo Carousel Start 
<div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="vista/IMG/maq1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/IMG/maq2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/IMG/maq3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>
</div>


   
    <script>
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: 2000 
            });
        });
    </script>
 Nuevo Carousel End
 -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="vista/IMG/tinte2.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Horario de Atención</h6>
                        <h1 class="mb-4">Colorimetría Personalizada: Tu Belleza Única</h1>
                        <p>En Diosam, consideramos que tu experiencia es única y excepcional. Nuestra dedicación a la colorimetría personalizada, manicura, pedicura y cortes de cabello va más allá de lo ordinario. Cada visita es una oportunidad para que te sientas especial y te sumerjas en un mundo de belleza y estilo a medida.</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon – Fri : 9:00 AM - 7:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 9:00 AM - 6:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sunday : Closed</li>
                        </ul>
                        <a href="vista/DOCS/servicios.php" class="btn btn-primary mt-2">Reserva tu cita</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->


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
