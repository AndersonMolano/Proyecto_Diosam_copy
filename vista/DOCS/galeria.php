<?php
    session_start();
    
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap');
          </style>
        <link rel="stylesheet" href="../CSS/galeria.css">
        <title>Diosam</title> 
    </head>
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
<br>
<br>
<h1>Explora Nuestros Servicios de Belleza</h1>
<br>
<br>
<br>
<div class="cont">
    <div class="row">
        <div class="col-md-6">
            <h4>Manicura</h4>
            <h5>Encontrarás expertos en uñas para lucir una manicura impecable.</h5>
            <br>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../IMG/manic1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/manic2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/manic3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
        <div class="col-md-6">
           
            <h4>Pedicura</h4>
            <h5>¡Reserva tu pedicura hoy mismo y experimenta la diferencia!</h5>
            <br>
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../IMG/pedic1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/pedic2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/pedic3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>

<div class="cont">
    <div class="row">
        <div class="col-md-6">
            <h4>Cepillado</h4>
            <h5>Nuestros expertos en cepillado están listos para transformar tu estilo. </h5>
            <br>
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../IMG/cep1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/cep2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/cep3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
        <div class="col-md-6">
        
            <h4>Tintura</h4>
            <h5>Tu cabello en una obra maestra personalizada</h5>
            <br>
            <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../IMG/tinte1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/tinte2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/tinte3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>

<div class="cont">
    <div class="row">
        <div class="col-md-6">
            <h4>Corte</h4>
            <h5>Encontrarás una amplia gama de cortes de cabello para hombre y mujer</h5>
            <br>
            <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../IMG/corte1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/corte2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/corte3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
        <div class="col-md-6">
            
            <h4>Maquillaje</h4>
            <h5>Ofrecemos servicios de maquillaje excepcionales para realzar tu belleza</h5>
            <br>
            <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../IMG/maq1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/maq2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../IMG/maq3.jpg" class="d-block w-100" alt="...">
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

    </html>